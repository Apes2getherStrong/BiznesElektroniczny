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
            for (int i=0; i<1; i++) {
                System.out.println("**** RUN " + i + " ****");
                th.run(i);
                System.out.println();
            }
        } catch (InterruptedException e) {
            System.out.println("interrupted exception");
            e.printStackTrace();
        }

    }
}
