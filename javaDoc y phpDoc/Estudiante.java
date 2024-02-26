
/**
* Descripción de la clase o método. Puede incluir información adicional.
* @author Juan Domingo Rodríguez Rodríguez
* @version 1.1
*/




/**
 * Esta es la clase que representa un Estudiante.
 * Contiene información básica sobre el estudiante, como su nombre y edad.
 */
public class Estudiante {

    private String nombre; // Nombre del estudiante
    private int edad; // Edad del estudiante

    /**
     * Constructor para crear un nuevo Estudiante.
     * @param nombre El nombre del estudiante.
     * @param edad La edad del estudiante.
     */
    public Estudiante(String nombre, int edad) {
        this.nombre = nombre;
        this.edad = edad;
    }

    /**
     * Método para obtener el nombre del estudiante.
     * @return El nombre del estudiante.
     */
    public String getNombre() {
        return nombre;
    }

    /**
     * Método para establecer el nombre del estudiante.
     * @param nombre El nombre a establecer.
     */
    public void setNombre(String nombre) {
        this.nombre = nombre;
    }

    /**
     * Método para obtener la edad del estudiante.
     * @return La edad del estudiante.
     */
    public int getEdad() {
        return edad;
    }

    /**
     * Método para establecer la edad del estudiante.
     * @param edad La edad a establecer.
     */
    public void setEdad(int edad) {
        this.edad = edad;
    }

    /**
     * Método para obtener una representación en cadena del objeto Estudiante.
     * @return Una cadena que representa al Estudiante.
     */
    @Override
    public String toString() {
        return "Estudiante{" +
                "nombre='" + nombre + '\'' +
                ", edad=" + edad +
                '}';
    }
}
