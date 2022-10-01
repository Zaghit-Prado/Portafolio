using System;
using System.Collections.Generic;
using System.Text;
using System.Threading.Tasks;
using System.Windows.Input;
using Xamarin.Forms;
using Agenda_Actividades.Vista.Agenda;
using Agenda_Actividades.Datos;
using Agenda_Actividades.Modelos;
using System.Collections.ObjectModel;
using Agenda_Actividades.Conexion;
using Firebase.Database;
using System.Linq;
using Agenda_Actividades.Vista;
namespace Agenda_Actividades.VistaModelo.VMagenda
{
    public class VMlistaagenda : BaseViewModel
    { 
        #region VARIABLES
        string _Texto;
        ObservableCollection<Magenda> _Listaagenda;
        #endregion
        #region CONSTRUCTOR
        public VMlistaagenda(INavigation navigation)
        {
            Navigation = navigation;
            Mostraragenda();
        }
        #endregion
        #region OBJETOS
        public ObservableCollection<Magenda> Listaagenda
        {
            get { return _Listaagenda; }
            set
            {
                SetValue(ref _Listaagenda, value);
                OnPropertyChanged();
            }
        }
        #endregion
        #region PROCESOS
        public async Task Mostraragenda()
        {
            var funcion = new DAgenda();
            Listaagenda = await funcion.Mostraragenda();
        }
        public async Task Iraregistro()
        {
            await Navigation.PushAsync(new Registraragenda());
        }
        #endregion
        #region COMANDOS
        public ICommand Iraregistrocommand => new Command(async () => await Iraregistro());

        #endregion
    }
}
