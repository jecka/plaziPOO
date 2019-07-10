class Main {
    public static void main(String[] args) {

        Car car = new Car("AMA123",new Account("Andres Herrera", "AND123"));
        car.passegenger =4;
        car.printDataCar();
       

        Car car2= new Car("QWE567", new Account("Andrea Herrera", "ABC123"));
        car2.passegenger=3;
        car2.printDataCar();
        
    }
       
}