#imports
import mysql.connector

button = True

class device:

    def __init__(self):
        # Fields
        self.distance = 0

    def connection(self):
        # Connection to server
        self.mydb = mysql.connector.connect(
        host="192.168.2.26",
        user="Glenn3",
        password="Glenn1234!",
        database="DataScience",
        auth_plugin='mysql_native_password'
        )

    def measure(self):
        # measure distance
        self.distance = 50

    def send(self):
        self.connection()
        self.measure()

        name = input("Give name of distance: ")
        discription = input("Give name of discription: ")

        print("Name: ", name)
        print("discription: ", discription)


        mycursor = self.mydb.cursor()

        sql = "INSERT INTO datascience (Naam, Discription, Afstand) VALUES (%s, %s, %s)"
        val = (name, discription, self.distance)
        mycursor.execute(sql, val)

        self.mydb.commit()

        print(mycursor.rowcount, "record inserted.")

def main():
    s = device()

    #s.measure()
    if button == True:
        s.send()

# Call the main function
if __name__ == '__main__':
    main()
