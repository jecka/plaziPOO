class Main {
    public static void main(String[] args) {
        UberX uberx = new UberX ("AMA123"  ,new Account("Andres Herrera", "AND123")  ,"Chevrolet " ,"Sonic");
        uberx.setPassenger(4);
        uberx.printDataCar();

        UberVan uberVan = new UberVan("FGH789",new Account("Andres Herrera", "AND123") );
        uberVan.setPassenger(6);
        uberVan.printDataCar();
        /*
        Car car2= new Car("QWE567", new Account("Andrea Herrera", "ABC123"));
        car2.passegenger=3;
        car2.printDataCar();
     */   
    }
       
}