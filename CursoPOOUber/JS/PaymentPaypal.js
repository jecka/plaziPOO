class PaymentPaypal extends Payment{
    constructor(id,email){
        super(id);
        this.email = email;
    }
}