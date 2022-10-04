using escuela.bean;
using System.Data;

namespace escuela.dao
{
    internal class daoEstudiante
    {
        bd.clsBD clsBD = new bd.clsBD("CrudEscuela");
        internal DataTable getEstudiante()
        {
            clsBD.Sentencia("sp_getEstudiantes");
            return clsBD.getDataTable();
        }
        internal void Guardar(Estudiantes estudiantes)
        {
            clsBD.Sentencia(string.Format("sp_NewEstudiante '{0}', '{1}', '{2}', '{3}', '{4}', '{5}', '{6}', '{7}', '{8}', '{9}', '{10}', '{11}' ", estudiantes.Nombre, estudiantes.dni, estudiantes.Segnombre, estudiantes.Apellidop, estudiantes.Apellidom, estudiantes.Telf, estudiantes.Direccion, estudiantes.Email, estudiantes.fechaNa, estudiantes.Edad, estudiantes.grado, estudiantes.seccion));
            clsBD.Ejecutar();
        }
        internal void eliminar(int idEstudiante)
        {
            clsBD.Sentencia(string.Format("sp_BorrarAlum {0} ", idEstudiante));
            clsBD.Ejecutar();
        }
        internal void Editar(Estudiantes estudiantes)
        {
            clsBD.Sentencia(string.Format("sp_EditarAlum '{0}', '{1}', '{2}', '{3}', '{4}', '{5}', '{6}', '{7}', '{8}', '{9}', '{10}', '{11}', '{12}' ", estudiantes.Nombre, estudiantes.dni, estudiantes.Segnombre, estudiantes.Apellidop, estudiantes.Apellidom, estudiantes.Telf, estudiantes.Direccion, estudiantes.Email, estudiantes.fechaNa, estudiantes.Edad, estudiantes.grado, estudiantes.seccion, estudiantes.idEstudiante));
            clsBD.Ejecutar();
        }
    }
}
