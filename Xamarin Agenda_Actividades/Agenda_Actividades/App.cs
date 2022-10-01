using Agenda_Actividades.Vista.Agenda;
using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using Xamarin.Forms;
namespace Agenda_Actividades
{
    public partial class App : Application
    {
        public App()
        {

            MainPage = new NavigationPage(new Listaagenda());
        }

        protected override void OnStart()
        {
        }

        protected override void OnSleep()
        {
        }

        protected override void OnResume()
        {
        }
    }
}
