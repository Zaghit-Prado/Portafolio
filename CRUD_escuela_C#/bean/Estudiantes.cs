using System;
using System.Collections.Generic;
using System.Data;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace escuela.bean
{
    internal class Estudiantes
    {
        
        #region Propiedades
        public int idEstudiante { get; set; }
        public string Nombre { get; set; }
        public string dni { get; set; }
        public string Segnombre { get; set; }
        public string Apellidop { get; set; }
        public string Apellidom { get; set; }
        public string Telf { get; set; }
        public string Direccion { get; set; }
        public string Email { get; set; }
        public string fechaNa { get; set; }
        public string Edad { get; set; }
        public string grado { get; set; }
        public string seccion { get; set; }


        #endregion

        #region Constructores

        public Estudiantes()
        {
           
        }

        public Estudiantes(int idEstudiante, string nombre, string DNI, string segnombre, string apellidop, string apellidom, string telf, string direccion, string email, string FechaNa, string edad, string Grado, string Seccion)
        {
            this.idEstudiante = idEstudiante;
            Nombre = nombre;
            dni = DNI;
            Segnombre = segnombre;
            Apellidop = apellidop;
            Apellidom = apellidom;
            Telf = telf;
            Direccion = direccion;
            Email = email;
            fechaNa = FechaNa;
            Edad = edad;
            grado = Grado;
            seccion = Seccion;
        }

        #endregion
    }
}
