package org.example;

import org.openqa.selenium.WebDriver;
import org.openqa.selenium.chrome.ChromeDriver;

/**
 * Hello world!
 *
 */
public class App 
{

    public static void main( String[] args )
    {
        TestHandler th = new TestHandler();
        try {
            th.run();
        } catch (InterruptedException e) {
            System.out.println("interrupted exception");
            e.printStackTrace();
        }

    }
}
