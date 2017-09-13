class TestClass
{   
    public static $currentValue;

    private static $_instance = null;

    private function __construct () { }

    public static function getInstance ()
    {
        if (self::$_instance === null) {
            self::$_instance = new self;
        }

        return self::$_instance;
    }

    public function toValue($value) {
        self::$currentValue = $value;
        return $this;
    }

    public function add($value) {
        self::$currentValue = self::$currentValue + $value;
        return $this;
    }

    public function subtract($value) {
        self::$currentValue = self::$currentValue - $value;
        return $this;
    }

    public function result() {
        return self::$currentValue;
    }
}

// Example Usage:
$result = TestClass::getInstance ()
    ->toValue(5)
    ->add(3)
    ->subtract(2)
    ->add(8)
    ->result();
