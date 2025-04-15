import java.io.IOException;
import java.io.PrintWriter;
import java.sql.Connection;
import java.sql.DriverManager;
import java.sql.PreparedStatement;
import java.sql.SQLException;
import javax.servlet.ServletException;
import javax.servlet.annotation.WebServlet;
import javax.servlet.http.HttpServlet;
import javax.servlet.http.HttpServletRequest;
import javax.servlet.http.HttpServletResponse;

@WebServlet("/RegistroUsuarioServlet")
public class RegistroUsuarioServlet extends HttpServlet {
    private static final long serialVersionUID = 1L;

    protected void doPost(HttpServletRequest request, HttpServletResponse response) throws ServletException, IOException {
        response.setContentType("text/html");
        PrintWriter out = response.getWriter();

        // Obtener los datos del formulario
        String correo = request.getParameter("email");
        String password = request.getParameter("password");
        String estado = "activo"; // Se define por defecto como "activo"
        int idRol = 9001; // Se asigna un rol por defecto

        // Datos de conexión a la base de datos
        String jdbcURL = "jdbc:mysql://localhost:3306/agendamiento_web";
        String dbUser = "root";
        String dbPassword = "joel2112mahecha.";

        // Consulta SQL sin incluir `idusuario` porque es autoincrementable
        String sql = "INSERT INTO usuario (correoUsuario, passwordUsuario, estadoUsuario, idrolFK) VALUES (?, ?, ?, ?)";

        try (Connection connection = DriverManager.getConnection(jdbcURL, dbUser, dbPassword);
             PreparedStatement statement = connection.prepareStatement(sql)) {

            statement.setString(1, correo);
            statement.setString(2, password);
            statement.setString(3, estado);
            statement.setInt(4, idRol);

            int rowsInserted = statement.executeUpdate();
            if (rowsInserted > 0) {
                out.println("<h2>¡Registro exitoso!</h2>");
            } else {
                out.println("<h2>Error al registrar. Inténtelo de nuevo.</h2>");
            }

        } catch (SQLException e) {
            e.printStackTrace();
            out.println("<h2>Error en la base de datos: " + e.getMessage() + "</h2>");
        }
    }
}
