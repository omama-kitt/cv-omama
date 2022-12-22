/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package pro_package;

import java.sql.*;
import javax.swing.JOptionPane;

/**
 *
 * @author Hp
 */
public class conn_provider {
    public static Connection getcon(){
       try {
            // TODO add your handling code here:
            DriverManager.registerDriver(new
        oracle.jdbc.driver.OracleDriver());
            String strurl="jdbc:oracle:thin:@localhost:1521:orcl";
            Connection con =DriverManager.getConnection(strurl,"myomamauser","654321");
              return con;
        } catch (Exception ex) {
            JOptionPane.showMessageDialog(null, ex.toString());
        }
        return null;
     
    }
}
