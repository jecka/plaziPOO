import java.util.Date;

class PaymentCard extends Payment{
    Integer number;
    Integer ccv;
    Date date;
    public PaymentCard(Integer id, Integer cvv, Date date){
        super(id);
        this.ccv = cvv;
        this.date = date;
    }
}