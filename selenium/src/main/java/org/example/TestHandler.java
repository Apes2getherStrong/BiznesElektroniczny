package org.example;

import org.openqa.selenium.*;
import org.openqa.selenium.chrome.ChromeDriver;
import org.openqa.selenium.firefox.FirefoxDriver;
import org.openqa.selenium.support.ui.ExpectedConditions;
import org.openqa.selenium.support.ui.WebDriverWait;

import java.time.Duration;
import java.util.List;
import java.util.Random;
import java.util.Scanner;


public class TestHandler {
    private WebDriver driver;
    private JavascriptExecutor executor;
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
        Thread.sleep(100);
        executor.executeScript("arguments[0].click();", firstDropdownItem);

        Thread.sleep(waitTime);

        //choosing sub-category
        List<WebElement> subcategories = driver.findElements(By.className("subcategory-name"));
        WebElement firstSubcategory = subcategories.get(subcategoryNr);
        executor.executeScript("arguments[0].click();", firstSubcategory);
        Thread.sleep(100);

        //choosing product
        List<WebElement> product = driver.findElements(By.cssSelector(".thumbnail.product-thumbnail"));
        WebElement firstproduct = product.get(productNr);
        executor.executeScript("arguments[0].click();", firstproduct);


        Thread.sleep(waitTime);

        //entering wanted quantity
        addToCartAndContinueShopping(maxQuantity);
        returnToHomeScreen();

    }

    private void returnToHomeScreen() throws InterruptedException {
        Thread.sleep(100);
        WebElement logoImage = driver.findElement(By.className("logo"));
        executor.executeScript("arguments[0].click();", logoImage);
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

    private void loginUser(String email, String password) throws InterruptedException {
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
        //submit
        driver.findElement(By.xpath("//button[@class='btn btn-primary form-control-submit float-xs-right']")).click();
        System.out.println("TEST 4: REGISTERING NEW USER");
    }

    private void finishCartOrder(String address, String postcode, String city, int shippingTypeNr) throws InterruptedException {
        goToCart();
        Thread.sleep(100);
        driver.findElement(By.xpath("//div[@class='text-sm-center']/a[@class='btn btn-primary']")).click();

        List<WebElement> knownAddresses = driver.findElements(By.xpath("//label[@class='radio-block']"));

        //check if there are any known addresses
        if (knownAddresses.isEmpty()) {
            //fill out the form name surname already there
            driver.findElement(By.id("field-address1")).sendKeys(address); //address
            driver.findElement(By.id("field-postcode")).sendKeys(postcode); //postcode
            driver.findElement(By.id("field-city")).sendKeys(city); //city
            //submit the form
            driver.findElement(By.xpath("//footer[@class='form-footer clearfix']/button[@class='continue btn btn-primary float-xs-right']")).click();

        } else {
            //skip the form (the known address is already selected)
            driver.findElement(By.xpath("//button[@class='btn btn-primary continue float-xs-right']")).click();
        }

        //select the shipping type
        List<WebElement> shippingOptions = driver.findElements(By.cssSelector(".row.delivery-option.js-delivery-option"));
        shippingOptions.get(shippingTypeNr - 1).findElement(By.cssSelector(".row")).click();
        //submit the delivery option
        driver.findElement(By.xpath("//button[@name='confirmDeliveryOption']")).click();

        //select checkout on delivery
        driver.findElement(By.xpath("//input[@id='payment-option-2']")).click();
        //accept the terms
        driver.findElement(By.id("conditions_to_approve[terms-and-conditions]")).click();
        //submit
        driver.findElement(By.xpath("//button[@class='btn btn-primary center-block']")).click();
        System.out.println("TEST 5-8: FINISHING CART ORDER");
        returnToHomeScreen();
    }

    private void checkOrder(int orderNr) throws InterruptedException {
        driver.findElement(By.xpath("//ul[@class='account-list collapse']//a[@title='Zamówienia']")).click();

        //get the table
        List<WebElement> orders = driver.findElements(By.xpath("//table[@class='table table-striped table-bordered table-labeled hidden-sm-down']//tr"));
        orders.get(orderNr - 1).findElement(By.xpath("//a[@data-link-action='view-order-details']")).click();
        System.out.println("TEST 9: CHECKING ORDER DETAILS");
        returnToHomeScreen();
    }

    private void downloadInvoice(int invoiceNr) {
        driver.findElement(By.xpath("//ul[@class='account-list collapse']//a[@title='Zamówienia']")).click();
        List<WebElement> invoices = driver.findElements(By.xpath("//td[@class='text-sm-center hidden-md-down']//a"));
        invoices.get(invoiceNr-1).click();
    }

    public void run(int loop) throws InterruptedException {
        driver = new ChromeDriver();
        //driver = new FirefoxDriver();
        executor = (JavascriptExecutor) driver;
        driver.get(url);
        driver.getTitle();

        driver.manage().timeouts().implicitlyWait(Duration.ofMillis(5000));

        Scanner scanner = new Scanner(System.in);
        String input = "";
        bypassWarning();
        while (true) {
            displayOptions();
            int intput = scanner.nextInt();
            switch (intput) {
                case 1:
                    add10Products();
                    break;
                case 2:
                    searchForProduct("poduszki", 2);
                    break;
                case 3:
                    deleteProducts(3);
                    break;
                case 4:
                    registerNewUser("Janek", "Gogaczovov", "oskar" + loop + ".grigaczovov@gmail.com", "oskargogacz");
                    break;
                case 5:
                    finishCartOrder("Wojtanowska 24", "69-420", "Domozychowo", 4);
                    break;
                case 6:
                    checkOrder(1);
                    break;
                case 7:
                    downloadInvoice(1);
                    break;
                case 8:
                    add10Products();
                    searchForProduct("poduszki", 2);
                    deleteProducts(3);
                    registerNewUser("Janek", "Gogaczovov", "oskarik" + loop + ".grigaczovov@gmail.com", "oskargogacz");
                    finishCartOrder("Wojtanowska 24", "69-420", "Domozychowo", 4);
                    checkOrder(1);
                    break;
                case 9:
                    System.exit(0);

            }
        }
//        loginUser("oskar.gogacz@gmail.com", "oskargogacz");
    }



    private void displayOptions() {
        System.out.println();
        System.out.println("Valid Commands, type number of command:");
        System.out.println("1. Add 10 Products");
        System.out.println("2. Add searched product");
        System.out.println("3. Delete 3 items from cart");
        System.out.println("4. Register new user");
        System.out.println("5. Finish cart order");
        System.out.println("6. Check order status");
        System.out.println("7. Download invoice");
        System.out.println("8. Run all tests up to invoice");
        System.out.println("9. EXIT");
        System.out.println();
    }





}
