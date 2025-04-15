import java.io.IOException;
import java.sql.Connection;
import java.sql.DriverManager;
import java.sql.PreparedStatement;
import javax.servlet.ServletException;
import javax.servlet.annotation.WebServlet;
import javax.servlet.http.HttpServlet;
import javax.servlet.http.HttpServletRequest;
import javax.servlet.http.HttpServletResponse;

@WebServlet("/CitaServlet")
public class CitaServlet extends HttpServlet {

    protected void doPost(HttpServletRequest request, HttpServletResponse response) 
            throws ServletException, IOException {
        String idcliente = request.getParameter("idcliente");
        String numDocCliente = request.getParameter("numDocCliente");
        String tipoDocCliente = request.getParameter("tipoDocCliente");
        String nombreCliente = request.getParameter("nombreCliente");
        String apellidoCliente = request.getParameter("apellidoCliente");
        String telefonoCliente = request.getParameter("telefonoCliente");
        String estadoCliente = request.getParameter("estadoCliente");
        String idusuarioFK = request.getParameter("idusuarioFK");

        try {
            // Conexión a la base de datos
            String url = "jdbc:mysql://localhost:3306/agendamiento_web";
            String usuario = "root";
            String clave = "joel2112mahecha.";

            Connection con = DriverManager.getConnection(url, usuario, clave);

            // Inserción en la base de datos
            String sql = "insert into cliente (idcliente,numDocCliente,tipoDocCliente,nombreCliente,apellidoCliente,telefonoCliente,estadoCliente,idusuarioFK) values (?, ?, ?, ?)";
            PreparedStatement ps = con.prepareStatement(sql);
            ps.setString(1, idcliente);
            ps.setString(2, numDocCliente);
            ps.setString(3, tipoDocCliente);
            ps.setString(4, nombreCliente);
            ps.setString(3, apellidoCliente);
            ps.setString(4, telefonoCliente);
            ps.setString(3, estadoCliente);
            ps.setString(4, idusuarioFK);
        
            ps.executeUpdate();

            // Redirigir a una página de éxito
            response.sendRedirect("exito.jsp");

        } catch (Exception e) {
            e.printStackTrace();
            response.sendRedirect("error.jsp");
        }
    }
}
