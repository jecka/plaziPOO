from payment import Payment
class PaymentPaypal(Payment):
    email = str
    def __init__(self,id,email):
        super.__init(id,email)
        sef.email=email
