<?php
/**
 * Created by PhpStorm.
 * User: Darek
 * Date: 2017-12-10
 * Time: 09:28
 */

//declare(strict_type=1);

//$pies = new Customer(); -- zrobienie nowego obiektu
//$pies ->setName("Miauczek")


class Customer
{
    // privatr, public, protected

    protected $name;
    public $lastName;
    public $nip;
    //Status danego klienta moze  byc basic lub premium
    public $status = 'basic';
    //Dodanie zmiennej z wiekiem
    public $age;

    public function __construct(int $age = 0)
    {
        $this->age = $age;
    }

    public function getDiscount(): int
    {
        return 20;
    }
// setter setName
// getter getName


    public function setName(string $name): void
    {
        $this->name = $name;
    }

    public function getName()
    {
        return $this->name;
    }


    public function askForDiscount(): string
{

    return $this->name . "Can I ask for discount ? ";

}

    public function askForInvoice(int $invoiceId): Invoice
    {

       $invoice= new invoice();
       $invoice->number=$invoiceId;
       $invoice->date= new DateTime('now');
       $invoice->setCustomer($this);
       return $invoice;

    }

    public static function getClassName(): void
    {
        echo 'Jestem klasa', get_called_class(), PHP_EOL; // kiedy pisze sie przecinki  kiedy kropki?
        //echo $this->name , PHP_EOL; //Blad nie bedzie dzialac
    }




}