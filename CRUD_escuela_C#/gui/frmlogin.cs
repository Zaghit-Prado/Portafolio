using System;
using System.Drawing;
using System.Windows.Forms;

namespace escuela.gui
{
    public partial class frmlogin : Form
    {
        dao.daoProfesores daoProfesores = new dao.daoProfesores();
        public frmlogin()
        {
            InitializeComponent();
        }

        private void pibCerrar_Click(object sender, EventArgs e)
        {
            if (MessageBox.Show("Desea salir de la aplicación", "Salir",
                MessageBoxButtons.YesNo, MessageBoxIcon.Question) == DialogResult.Yes)
                Application.Exit();
        }

        private void btnIniciar_Click(object sender, EventArgs e)
        {
            if (txtDNI.Text.Trim() == "" || txtPassword.Text.Trim() == "")
            {
                MessageBox.Show("No hay datos escritos...");
                return;
            }
            bean.Profesores profesores = new bean.Profesores();
            profesores.dni = txtDNI.Text;
            profesores.contraseña = txtPassword.Text;
            daoProfesores.Login(profesores);

            if (profesores.valido)
            {
                CRUD frm = new CRUD(profesores);
                frm.Show();
                this.Hide();
            }
            

        }

        private void btn_Enter(object sender, EventArgs e)
        {
            
        }

        private void btn_Leave(object sender, EventArgs e)
        {
            
        }

        private void txt_Leave(object sender, EventArgs e)
        {
            ((TextBox)sender).BackColor = Color.White;
        }

        private void txt_KeyPress(object sender, KeyPressEventArgs e)
        {
            if (!char.IsDigit(e.KeyChar) && !(e.KeyChar == (char)Keys.Back))
                e.Handled = true;
        }

        private void txt_Enter(object sender, EventArgs e)
        {
            ((TextBox)sender).BackColor = Color.AliceBlue;
        }

        private void txt_Changed(object sender, EventArgs e)
        {
            btnIniciar.Enabled = txtDNI.Text.Length == txtDNI.MaxLength &&
                                 txtPassword.Text.Length == txtPassword.MaxLength;
        }
    }
}
