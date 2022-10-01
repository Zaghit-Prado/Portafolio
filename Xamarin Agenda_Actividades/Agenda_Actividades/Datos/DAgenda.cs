using System;
using System.Collections.Generic;
using System.Text;
using Agenda_Actividades.Modelos;
using Agenda_Actividades.Conexion;
using Firebase.Database.Query;
using System.Linq;
using System.Threading.Tasks;
using System.Collections.ObjectModel;
using Firebase.Database;

namespace Agenda_Actividades.Datos
{
    public class DAgenda
    {
        public async Task Insertaragenda(Magenda parametros)
        {
            await Cconexion.firebase
                .Child("Agenda")
                .PostAsync(new Magenda()
                {
                  
                    Icono = parametros.Icono,
                    Actividad = parametros.Actividad,
                    Tiempo = parametros.Tiempo,
                    Fecha = parametros.Fecha
                }
                );
        }
        public async Task<ObservableCollection<Magenda>> Mostraragenda()
        {
            var data = await Task.Run(() => Cconexion.firebase
                .Child("Agenda")
                .AsObservable<Magenda>()
                .AsObservableCollection()
                );
            return data;

        }
    }
}
