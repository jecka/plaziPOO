from payment import Payment

class PaymentCash(Payment):
    def __init__(self,id):
        self.id=id