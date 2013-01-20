---
layout: post
title: "Hack-o-Lantern"
date: 2012-11-14 14:29
comments: true
categories: hacks
---

I wanted to try something a little different for Halloween this year, 
and I've been looking to get my hands dirty with more arduino hacking projects.  

Of course, I'm not the first person to consider hacking a pumpkin so I took to 
the internet for some inspiration.

<!-- more -->

{% img left /images/posts/pages/hacks/arduino_hacking/lcd_shield_testing.jpg 280 %}

The most intriguing project I came across was a [pumpkin armed with silly string and a motion sensor](http://www.instructables.com/id/Arduino-controlled-Silly-String-shooter/),
but given the limited time on hand and dwindling inventory at the local radio shack I 
needed to come up with something different.

Radio Shack did have one item in particular that caught my interest, a [102dB Piezo Alarm](http://www.radioshack.com/product/index.jsp?productId=2062405).  

That should suffice to scare the pants off any unsuspecting guests.  Using some google-fu I
managed to find a person who had made a DIY from a very similar project .. [except that he used a car horn](http://blog.makezine.com/2012/10/26/make-the-scariest-pumpkin-ever/).  I suspect my neighbors would 
not approve.

So I started wiring up the components available.

{% img /images/posts/pages/hacks/arduino_hacking/arduino_breadboard.jpg 450 %}

But, the problem remained .. with no motion sensor how could I hide conspicuously trigger 
the alarm? Easy. By selecting a button as large and irresistable as possible :) 

{% img /images/posts/pages/hacks/arduino_hacking/finished_hack_o_lantern.jpg 450 %}

The photo above was taken from the entrance to the Sincerely Halloween Party's haunted
maze.  I used a portable battery pack to power the Arduino & let it loose.

LEDs in the button glowed with temptation & any time someone entering fell for the trap 
everyone at the event in the got a good laugh.  The sketch was pretty simple:

```c
    #define R_LED 5 //The pin # of the red LED
    #define Y_LED 6 // The pin # of the Yellow LED
    #define SPEAKER 3 //The pin # of the speaker
    #define BUTTON 7 //The pin # of the button

    int i = 0;
    int state = 0; //The on/off state of our siren.

    void setup()
    {
      pinMode(R_LED, OUTPUT);
      pinMode(Y_LED, OUTPUT);
      pinMode(SPEAKER, OUTPUT);
      pinMode(BUTTON, INPUT);
      Serial.begin(9600); 
    }

    void loop()
    {
      //Save the buttons state
      state = digitalRead(BUTTON);
      
      //If the siren is on...
      if (state == 1)
      {
        Serial.println("STATE = 1");

        //Flash LED and Speaker on and off.
        for(i = 1; i <= 2; i++)
        {
          analogWrite(Y_LED, 0);
          analogWrite(R_LED, 255);
          analogWrite(SPEAKER, 0);
          delay(50);
          analogWrite(Y_LED, 255);
          delay(50);
          analogWrite(R_LED, 0);
          analogWrite(Y_LED, 255);
          analogWrite(SPEAKER, 0);
          delay(400);
        }
      }
      else {
        //Turn of the speaker
        analogWrite(SPEAKER, 0);
        //Turn of the LED
        analogWrite(R_LED, 0);
        analogWrite(Y_LED, 0);
      }
    }
```