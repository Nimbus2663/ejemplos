<?php
class Circulo {
    // private const PI = 3.1416;
    private float $radio;

    public function __construct(float $radio) {
        $this->radio = $radio;
    }

    public function calcularArea() {
        // return self::PI * ($this->radio * $this->radio);
        return M_PI * ($this->radio * $this->radio);
    }

    public function calcularPerimetro() {
        return 2 * M_PI * $this->radio;
    }
}

$miCirculo = new Circulo(4);

echo "\n";
echo "Área del círculo: \t" . number_format($miCirculo->calcularArea(), 2, ".", ",");
echo "\n";
echo "Perímetro del círculo: \t" . number_format($miCirculo->calcularPerimetro(), 2, ".", ",");
?>