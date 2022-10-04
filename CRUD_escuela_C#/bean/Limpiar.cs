using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Windows.Forms;

namespace escuela.bean
{
    public class Limpiar
    {
        public void Borrartxt(Panel panel)
        {
            foreach (var txt in panel.Controls)
            {
                if (txt is TextBox)
                {
                    ((TextBox)txt).Clear();
                }
                else if (txt is ComboBox)
                {
                    ((ComboBox)txt).SelectedIndex = 0;
                }
            }
            
        }

    }
}
