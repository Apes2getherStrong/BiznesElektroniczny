package org.example;

import org.openqa.selenium.*;
import org.openqa.selenium.chrome.ChromeDriver;
import org.openqa.selenium.support.ui.ExpectedConditions;
import org.openqa.selenium.support.ui.WebDriverWait;

import java.time.Duration;
import java.util.List;
import java.util.Random;


public class TestHandler {
    private WebDriver driver = new ChromeDriver();
    private final String url = "http://localhost:8080";
    Random random = new Random();

    private final long waitTime = 0;

    //a) Dodanie do koszyka 10 produktów (w różnych ilościach) z dwóch różnych kategorii


    public final void bypassWarning() throws InterruptedException {
        // click advanced setting
        WebElement advancedButton = driver.findElement(By.xpath("//button[@id='details-button']"));
        advancedButton.click();

        Thread.sleep(waitTime);

        //go to site
        WebElement proceedToLocalHostLink = driver.findElement(By.xpath("//a[@id='proceed-link']"));
        proceedToLocalHostLink.click();


    }


    public void addProductsToCart(int categoryNr, int subcategoryNr, int productNr, int maxQuantity)
            throws InterruptedException {

        //choosing category
        List<WebElement> dropdownItems = driver.findElements(By.xpath("//a[@class='dropdown-item' and @data-depth='0']"));
        WebElement firstDropdownItem = dropdownItems.get(categoryNr);
        firstDropdownItem.click();

        Thread.sleep(waitTime);

        //choosing sub-category
        List<WebElement> subcategories = driver.findElements(By.className("subcategory-name"));
        WebElement firstSubcategory = subcategories.get(subcategoryNr);
        firstSubcategory.click();
        Thread.sleep(100);

        //choosing product
        List<WebElement> product = driver.findElements(By.cssSelector(".thumbnail.product-thumbnail"));
        WebElement firstproduct = product.get(productNr);
        firstproduct.click();

        Thread.sleep(waitTime);

        //entering wanted quantity
        addToCartAndContinueShopping(maxQuantity);
        returnToHomeScreen();

    }

    private void returnToHomeScreen() {
        WebElement logoImage = driver.findElement(By.className("logo"));
        logoImage.click();
    }

    private void addToCartAndContinueShopping(int maxQuantity) throws InterruptedException {
        WebElement quantityInput = driver.findElement(By.id("quantity_wanted"));
        int randomQuantity = 1;
        if (maxQuantity > 1)
            randomQuantity = random.nextInt(maxQuantity - 1) + 1;

        JavascriptExecutor js = (JavascriptExecutor) driver;
        js.executeScript("arguments[0].value='" + String.valueOf(randomQuantity) + "';", quantityInput);
        Thread.sleep(waitTime);

        //add to cart
        WebElement addToCartButton = driver.findElement(By.className("add-to-cart"));
        addToCartButton.click();
        Thread.sleep(waitTime);

        //continue shopping
        WebElement cartContentDiv = driver.findElement(By.className("cart-content-btn"));
        WebElement continueShoppingButton = cartContentDiv.findElement(By.xpath(".//button[contains(@class, 'btn-secondary')]"));
        continueShoppingButton.click();
    }

    public void add10Products() throws InterruptedException {
        addProductsToCart(0, 0, 0, 5);
        addProductsToCart(0, 0, 1, 5);
        addProductsToCart(0, 0, 2, 5);
        addProductsToCart(0, 0, 3, 5);
        addProductsToCart(0, 0, 4, 5);

        addProductsToCart(1, 0, 1, 5);
        addProductsToCart(1, 1, 1, 5);
        addProductsToCart(1, 2, 1, 5);
        addProductsToCart(1, 3, 1, 5);
        addProductsToCart(1, 4, 1, 5);
        System.out.println("TEST 1: ADDING 10 PRODUCTS FINISHED");
    }

    final public void searchForProduct(String input, int maxQuantity) throws InterruptedException {
        //searching for input
        WebElement searchBar = driver.findElement(By.xpath("//input[@class='ui-autocomplete-input']\n"));
        searchBar.sendKeys(input);
        searchBar.sendKeys(Keys.ENTER);

        //get product list
        List<WebElement> products = driver.findElements(By.xpath("//div[@class='products row']/*"));
        int productNr = random.nextInt(products.size());

        //get product
        WebElement product = products.get(productNr).findElement(By.cssSelector(".thumbnail.product-thumbnail"));
        product.click();

        addToCartAndContinueShopping(5);
        returnToHomeScreen();
        System.out.println("TEST 2: SEARCHING FOR PRODUCT");

    }

    private void goToCart() {
        WebElement cart = driver.findElement(By.cssSelector(".blockcart.cart-preview.active"));
        cart.click();
    }

    private void deleteFromCart() throws InterruptedException {
        List<WebElement> cartItems = driver.findElements(By.cssSelector(".cart-item"));
        int cartItemNr = random.nextInt(cartItems.size());
        WebElement cartItemDelete = cartItems.get(cartItemNr).findElement(By.cssSelector(".material-icons.float-xs-left"));
        cartItemDelete.click();

    }

    private void deleteProducts(int quantity) throws InterruptedException {
        goToCart();
        for (int i = 0; i < quantity; i++) {
            deleteFromCart();
            Thread.sleep(1000);
        }
        System.out.println("TEST 3: DELETING 3 PRODUCTS");
        returnToHomeScreen();
    }

    private void loginUser(String email, String password) {
        //go to login form
        driver.findElement(By.xpath("//div[@id='_desktop_user_info']//a")).click();
        //fill out login form
        driver.findElement(By.id("field-email")).sendKeys(email);    // email
        driver.findElement(By.id("field-password")).sendKeys(password);    // password
        //click login
        driver.findElement(By.id("submit-login")).click();
        returnToHomeScreen();
    }

    private void registerNewUser(String name, String surname, String email, String password) throws InterruptedException {
        //go to login form
        driver.findElement(By.xpath("//div[@id='_desktop_user_info']//a")).click();
        //go to registration form
        driver.findElement(By.xpath("//div[@class='no-account']//a")).click();
        //fill out the form
        driver.findElement(By.id("field-firstname")).sendKeys(name);    // name
        driver.findElement(By.id("field-lastname")).sendKeys(surname);    // surname
        driver.findElement(By.id("field-email")).sendKeys(email);    // email
        driver.findElement(By.id("field-password")).sendKeys(password);    // password
        driver.findElement(By.xpath("//input[@name='customer_privacy']")).click();    // click customer privacy
        driver.findElement(By.xpath("//input[@name='psgdpr']")).click();    // click privacy policy
        Thread.sleep(1000);
        System.out.println("TEST 4: REGISTERING NEW USER");

    }

    private void finishCartOrder(String address, String postcode, String city, int shippingTypeNr) throws InterruptedException {
        goToCart();
        Thread.sleep(100);
        driver.findElement(By.xpath("//div[@class='text-sm-center']/a[@class='btn btn-primary']")).click();

        List <WebElement> knownAddresses = driver.findElements(By.xpath("//label[@class='radio-block']"));

        //check if there are any known addresses
        if (knownAddresses.isEmpty()){
            //fill out the form name surname already there
            driver.findElement(By.id("field-address1")).sendKeys(address); //address
            driver.findElement(By.id("field-postcode")).sendKeys(postcode); //postcode
            driver.findElement(By.id("field-city")).sendKeys(city); //city
            //submit the form
            driver.findElement(By.xpath("//footer[@class='form-footer clearfix']/button[@class='continue btn btn-primary float-xs-right']")).click();

        }
        else{
            //skip the form (the known address is already selected)
            driver.findElement(By.xpath("//button[@class='btn btn-primary continue float-xs-right']")).click();
        }

        //select the shipping type
        List<WebElement> shippingOptions = driver.findElements(By.cssSelector(".row.delivery-option.js-delivery-option"));
        shippingOptions.get(shippingTypeNr-1).findElement(By.cssSelector(".row")).click();
        //submit the delivery option
        driver.findElement(By.xpath("//button[@name='confirmDeliveryOption']")).click();

        //select checkout on delivery
        driver.findElement(By.xpath("//input[@id='payment-option-2']")).click();
        //accept the terms
        driver.findElement(By.id("conditions_to_approve[terms-and-conditions]")).click();
        //submit
        driver.findElement(By.xpath("//button[@class='btn btn-primary center-block']")).click();

    }


    public void run() throws InterruptedException {
        driver.get(url);
        driver.getTitle();

        driver.manage().timeouts().implicitlyWait(Duration.ofMillis(5000));

        bypassWarning();
//        add10Products();
        searchForProduct("moontea", 5);
//        deleteProducts(3);
//        registerNewUser("Oskar","Domozych","oskar.gogacz@gmail.com","oskargogacz");
        loginUser("oskar.gogacz@gmail.com", "oskargogacz");
        finishCartOrder("Wojtanowska 24","69-420","Domozychowo",4);
        checkOrder();
        Thread.sleep(waitTime);


        Thread.sleep(2000);
        //driver.quit();
    }

    private void checkOrder() {
        
    }


}
