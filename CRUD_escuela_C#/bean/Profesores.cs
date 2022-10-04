using System;
using System.Collections.Generic;
using System.Data;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace escuela.bean
{
    public class Profesores
    {
        #region Propiedades
        public int id { get; set; }
        public string dni { get; set; }
        public string nombre { get; set; }
        public string apellido { get; set; }
        public string apellidoM { get; set; }
        public string contraseña { get; set; }
        public Cargo cargo { get; set; }
        public bool valido { get; set; }

        #endregion

        #region Constructores
        public Profesores() { }

        public Profesores(int Id, string Dni, string Nombre, string Apellido, string ApellidoM, string Contraseña, Cargo cargos)
        {
            this.id = Id;
            dni = Dni;
            nombre = Nombre;
            apellido = Apellido;
            apellidoM = ApellidoM;
            contraseña = Contraseña;
            this.cargo = cargos;
        }
        #endregion

        #region Metodos
        internal void setRegistro(DataRow dataRow)
        {
            valido = false;
            if (dataRow == null) return;
            cargo = new Cargo();
            valido = true;
            id = int.Parse(dataRow["id"].ToString());
            dni = dataRow["dni"].ToString();
            nombre = dataRow["nombre"].ToString().Trim();
            apellido = dataRow["apellido"].ToString().Trim();
            apellidoM = dataRow["apellidoM"].ToString().Trim();
            cargo.idCargo = int.Parse(dataRow["idCargo"].ToString());
            cargo.cargo = dataRow["cargo"].ToString().Trim();
        }
        #endregion
    }
}
