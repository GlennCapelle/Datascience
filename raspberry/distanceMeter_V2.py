#imports
import mysql.connector
import RPi.GPIO as GPIO # Import Raspberry Pi GPIO library
import time

GPIO.setwarnings(False) # Ignore warning for now
GPIO.setmode(GPIO.BOARD) # Use physical pin numbering
 
# Ultrasone sensor
# Set GPIO Pins
GPIO_TRIGGER = 23
GPIO_ECHO = 24
 
# Set GPIO direction (IN / OUT)
GPIO.setup(GPIO_TRIGGER, GPIO.OUT)
GPIO.setup(GPIO_ECHO, GPIO.IN)

# Button
GPIO_BUTTON = 15
# Set pin 10 to be an input pin and set initial value to be pulled low (off)
GPIO.setup(GPIO_BUTTON, GPIO.IN, pull_up_down=GPIO.PUD_DOWN) 

class device:

    def __init__(self):
        # Fields
        self.distance = 0

    def connection(self):
        # Connection to server
        self.mydb = mysql.connector.connect(
        host="localhost",
        user="root",
        password="",
        database="datascience"
        )

    def measure(self):
        # set Trigger to HIGH
        GPIO.output(GPIO_TRIGGER, True)
    
        # set Trigger after 0.01ms to LOW
        time.sleep(0.00001)
        GPIO.output(GPIO_TRIGGER, False)
    
        StartTime = time.time()
        StopTime = time.time()
    
        # save StartTime
        while GPIO.input(GPIO_ECHO) == 0:
            StartTime = time.time()
    
        # save time of arrival
        while GPIO.input(GPIO_ECHO) == 1:
            StopTime = time.time()
    
        # time difference between start and arrival
        TimeElapsed = StopTime - StartTime
        # multiply with the sonic speed (34300 cm/s) and divide by 2, because there and back
        self.distance = (TimeElapsed * 34300) / 2

    def send(self):
        self.connection()
        self.measure()

        name = input("Give name of distance: ")
        discription = input("Give name of discription: ")

        print("Name: ", name)
        print("discription: ", discription)


        mycursor = self.mydb.cursor()

        sql = "INSERT INTO datascience (Name, Discription, Distance) VALUES (%s, %s, %s)"
        val = (name, discription, self.distance)
        mycursor.execute(sql, val)

        self.mydb.commit()

        print(mycursor.rowcount, "record inserted.")

def main():
    s = device()

    #s.measure()
    if GPIO.input(10) == GPIO.HIGH::
        s.send()

# Call the main function
if __name__ == '__main__':
    main()