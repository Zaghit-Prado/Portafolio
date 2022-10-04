using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace escuela.bean
{
    public class Prof
    {
        #region Propiedades
        public int id { get; set; }
        public string dni { get; set; }
        public string nombre { get; set; }
        public string apellido { get; set; }
        public string apellidoM { get; set; }
        public string contraseña { get; set; }
        public string IdCargo { get; set; }

        #endregion

        #region Constructores
        public Prof() { }

        public Prof(int Id, string Dni, string Nombre, string Apellido, string ApellidoM, string Contraseña, string idCargo)
        {
            this.id = Id;
            dni = Dni;
            nombre = Nombre;
            apellido = Apellido;
            apellidoM = ApellidoM;
            contraseña = Contraseña;
            IdCargo = idCargo;
        }
        #endregion
    }
}
