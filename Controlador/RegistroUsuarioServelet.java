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

        String nombre = request.getParameter("nombre");
        String apellido = request.getParameter("apellido");
        String email = request.getParameter("email");
        String password = request.getParameter("password");

        String jdbcURL = "jdbc:mysql://localhost:3306/agendamiento_web";
        String dbUser = "root";
        String dbPassword = "joel2112mahecha.";

        String sql = "insert into usuario (idusuario, correoUsuario, passwordUsuario,estadoUsuario,idrolFK)  values (?, ?, ?, ?)";

        try (Connection connection = DriverManager.getConnection(jdbcURL, dbUser, dbPassword);
             PreparedStatement statement = connection.prepareStatement(sql)) {

            statement.setString(1, nombre);
            statement.setString(2, apellido);
            statement.setString(3, email);
            statement.setString(4, password);

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

