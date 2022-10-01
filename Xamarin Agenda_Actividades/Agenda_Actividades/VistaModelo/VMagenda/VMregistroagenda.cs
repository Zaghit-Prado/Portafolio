using System;
using System.Collections.Generic;
using System.Text;
using System.Threading.Tasks;
using System.Windows.Input;
using Xamarin.Forms;
using Agenda_Actividades.Modelos;
using Agenda_Actividades.Datos;

namespace Agenda_Actividades.VistaModelo.VMagenda
{
    internal class VMregistroagenda : BaseViewModel
    {
        #region VARIABLES
        string _TxtActividad;
        string _TxtTiempo;
        string _TxtFecha;
        string _Txticono;

        #endregion
        #region CONSTRUCTOR
        public VMregistroagenda(INavigation navigation)
        {
            Navigation = navigation;
        }
        #endregion
        #region OBJETOS
       
        public string TxtActividad
        {
            get { return _TxtActividad; }
            set { SetValue(ref _TxtActividad, value); }
        }
        public string TxtTiempo
        {
            get { return _TxtTiempo; }
            set { SetValue(ref _TxtTiempo, value); }
        }
        public string TxtFecha
        {
            get { return _TxtFecha; }
            set { SetValue(ref _TxtFecha, value); }
        }
        public string Txticono
        {
            get { return _Txticono; }
            set { SetValue(ref _Txticono, value); }
        }
        #endregion
        #region PROCESOS
        public async Task Insertar()
        {
            var funcion = new DAgenda();
            var parametros = new Magenda();
            parametros.Icono = Txticono;
            parametros.Actividad = TxtActividad;
            parametros.Tiempo = TxtTiempo;
            parametros.Fecha = TxtFecha;

            await funcion.Insertaragenda(parametros);
            await Volver();
        }
        public async Task Volver()
        {
            await Navigation.PopAsync();
        }
        public void ProcesoSimple()
        {

        }
        #endregion
        #region COMANDOS
        public ICommand Insertarcommand => new Command(async () => await Insertar());
        public ICommand Volvercommand => new Command(async () => await Volver());
        public ICommand ProcesoSimpcommand => new Command(ProcesoSimple);
        #endregion
    }
}

