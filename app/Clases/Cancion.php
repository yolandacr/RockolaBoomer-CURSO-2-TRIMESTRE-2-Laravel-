    class Cancion{
    private $id;
    private $nombre;
    private $categoria;
    private $opciones=[];
    private $ruta;




    <!-- METODO CONSTRUCTOR-->
    public function __construct($id,$nombre,$categoria,$opciones,$ruta)
    {
    $this->id = $id;
    $this->nombre = $nombre;
    $this->categoria = $categoria;
    $this->opciones = $opciones;
    $this->ruta = $ruta;
    }


    <!-- METODOS GETTER -->

    <!-- METODO GETTER DE LA ID -->
    public function getId()
    {
    return $this->id;
    }

    <!-- METODO GETTER DEL NOMBRE -->
    public function getNombre()
    {
    return $this->nombre;
    }

    <!-- METODO GETTER DE LA CATEGORIA -->

    public function categoria()
    {
    return $this->categoria;
    }

    <!-- METODO GETTER DEL ARRAY DE OPCIONES -->

    public function getOpciones()
    {
    return $this->opciones;
    }

    <!-- METODO GETTER DE LA RUTA -->

    public function getRuta()
    {
    return $this->ruta;
    }



    <!-- METODOS SETTER -->
    public function setOpciones($opciones)
    {
    $this->opciones = $opciones;
    }
    }