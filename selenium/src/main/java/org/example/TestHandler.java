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


    public void run() throws InterruptedException{
        driver.get(url);
        driver.getTitle();

        driver.manage().timeouts().implicitlyWait(Duration.ofMillis(750));

        Thread.sleep(waitTime);

        driver.quit();
    }
}
