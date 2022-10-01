using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;
using Agenda_Actividades.VistaModelo.VMagenda;
using Xamarin.Forms;
using Xamarin.Forms.Xaml;

namespace Agenda_Actividades.Vista.Agenda
{
    [XamlCompilation(XamlCompilationOptions.Compile)]
    public partial class Listaagenda : ContentPage
    {
        public Listaagenda()
        {
            InitializeComponent();
            BindingContext = new VMlistaagenda(Navigation);
        }
    }
}