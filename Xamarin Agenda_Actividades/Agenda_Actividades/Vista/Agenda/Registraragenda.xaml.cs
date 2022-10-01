using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

using Xamarin.Forms;
using Xamarin.Forms.Xaml;
using Agenda_Actividades.VistaModelo.VMagenda;
using Agenda_Actividades.Modelos;

namespace Agenda_Actividades.Vista.Agenda
{
    [XamlCompilation(XamlCompilationOptions.Compile)]
    public partial class Registraragenda : ContentPage
    {
        public Registraragenda()
        {
            InitializeComponent();

            BindingContext = new VMregistroagenda (Navigation);
        }
    }
}