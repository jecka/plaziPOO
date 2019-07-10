from car import Car

if __name__ == "__main__":
    print("hola Mundo")
    car = Car()
    car.license = "AMS234"
    car.driver = "Andres Herrera"
    print(vars(car))

    car2 = Car()
    car2.license = "QWE123"
    car2.driver = "Andrea Herrera"
    print(vars(car2))