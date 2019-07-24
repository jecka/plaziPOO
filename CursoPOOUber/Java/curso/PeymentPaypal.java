class PaymentPaypal extends Payment{
    String email;
    
    public PaymentPaypal(Integer id , String email){
        super (id);
        this.email = email;
    }
}