using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace escuela.bean
{
    public class Cargo
    {
        #region Propiedades
        public int idCargo { get; set; }
        public string cargo { get; set; }

        #endregion

        #region Constructores

        public Cargo() { }


        public Cargo(int idCargo, string cargos)
        {
            this.idCargo = idCargo;
            cargo = cargos;
        }

        #endregion
    }
}
