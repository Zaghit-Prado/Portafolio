using escuela.bean;
using System.Data;

namespace escuela.dao
{
    internal class daoProfesores
    {
        bd.clsBD clsBD = new bd.clsBD("CrudEscuela");
        internal void Login(Profesores profesores)
        {
            clsBD.Sentencia("sp_Profesor_Login " + profesores.dni + "," + profesores.contraseña);
            profesores.setRegistro(clsBD.getDataRow());
        }
        internal DataTable getProf()
        {
            clsBD.Sentencia("sp_getprofesores");
            return clsBD.getDataTable();
        }
        
        internal void Guardar(Prof prof)
        {
            clsBD.Sentencia(string.Format("sp_NewProf '{0}', '{1}', '{2}', '{3}', '{4}', '{5}' ", prof.dni, prof.nombre,  prof.apellido, prof.apellidoM, prof.contraseña, prof.IdCargo));
            clsBD.Ejecutar();
        }
        internal void delete(int id)
        {
            clsBD.Sentencia(string.Format("sp_BorrarProf {0} ", id));
            clsBD.Ejecutar();
        }
    }
}
