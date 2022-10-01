using System;
using System.Collections.Generic;
using System.Text;
using Firebase.Database;

namespace Agenda_Actividades.Conexion
{
    public class Cconexion
    {
        public static FirebaseClient 
            firebase = new FirebaseClient("https://mvvmagenda-default-rtdb.firebaseio.com/");

    }
}
