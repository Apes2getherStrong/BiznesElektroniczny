package org.example;

import org.openqa.selenium.*;
import org.openqa.selenium.chrome.ChromeDriver;
import org.openqa.selenium.support.ui.ExpectedConditions;
import org.openqa.selenium.support.ui.WebDriverWait;

import java.time.Duration;
import java.util.List;
import java.util.Random;


public class TestHandler  {
    private WebDriver driver = new ChromeDriver();
    private final String url = "http://localhost:8080";
    private final long waitTime = 0;

    //a) Dodanie do koszyka 10 produktów (w różnych ilościach) z dwóch różnych kategorii
    public void addProductsToCart(int categoryNr, int subcategoryNr, int productNr, int maxQuantity)
            throws InterruptedException{

        //choosing category
        List<WebElement> dropdownItems = driver.findElements(By.xpath("//a[@class='dropdown-item' and @data-depth='0']"));
        WebElement firstDropdownItem = dropdownItems.get(categoryNr);
        firstDropdownItem.click();

        Thread.sleep(waitTime);

        //choosing sub-category
        List<WebElement> subcategories = driver.findElements(By.className("subcategory-name"));
        WebElement firstSubcategory = subcategories.get(subcategoryNr);
        firstSubcategory.click();

        Thread.sleep(waitTime);

        //choosing product
        List<WebElement> product = driver.findElements(By.cssSelector(".thumbnail.product-thumbnail"));
        WebElement firstproduct = product.get(productNr);
        firstproduct.click();

        Thread.sleep(waitTime);

        //entering wanted quantity
        WebElement quantityInput = driver.findElement(By.id("quantity_wanted"));
        Random random = new Random();
        int randomQuantity = 1;
        if (maxQuantity > 1)
            randomQuantity = random.nextInt(maxQuantity - 1) + 1;

        JavascriptExecutor js = (JavascriptExecutor) driver;
        js.executeScript("arguments[0].value='"+ String.valueOf(randomQuantity)+"';", quantityInput);
        Thread.sleep(waitTime);

        //add to cart
        WebElement addToCartButton = driver.findElement(By.className("add-to-cart"));
        addToCartButton.click();
        Thread.sleep(waitTime);

        //continue shopping
        WebElement cartContentDiv = driver.findElement(By.className("cart-content-btn"));
        WebElement continueShoppingButton = cartContentDiv.findElement(By.xpath(".//button[contains(@class, 'btn-secondary')]"));
        continueShoppingButton.click();

        Thread.sleep(waitTime);

        WebElement logoImage = driver.findElement(By.className("logo"));
        logoImage.click();
        Thread.sleep(waitTime);

    }

    public void run() throws InterruptedException{
        driver.get(url);
        driver.getTitle();

        driver.manage().timeouts().implicitlyWait(Duration.ofMillis(750));

        Thread.sleep(waitTime);
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

        Thread.sleep(2000);
        driver.quit();
    }
}
