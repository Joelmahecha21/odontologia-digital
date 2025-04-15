import java.sql.Connection;
import java.sql.DriverManager;

public class Conexion {
    private static Connection con;

    public static Connection getConexion() {
        try {
            String url = "mysql:host=//localhost:3306/agendamiento_web";
            String usuario = "root";
            String clave = "joel2112mahecha.";

            if (con == null) {
                con = DriverManager.getConnection(url, usuario, clave);
            }
        } catch (Exception e) {
            e.printStackTrace();
        }
        return con;
    }
}
