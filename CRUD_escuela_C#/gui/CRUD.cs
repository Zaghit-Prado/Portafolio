using System;
using System.Collections.Generic;
using System.ComponentModel;
using System.Data;
using System.Drawing;
using System.Linq;
using System.Reflection;
using System.Runtime.InteropServices;
using System.Text;
using System.Threading.Tasks;
using System.Windows.Forms;

namespace escuela.gui
{
    public partial class CRUD : Form
    {
        bean.Profesores profesores = new bean.Profesores();
        public CRUD()
        {
            InitializeComponent();
        }
        private const int WM_NCHITTEST = 132;
        private const int HTBOTTOMRIGHT = 17;
        private Rectangle sizeGripRectangle;
        protected override void WndProc(ref Message m)
        {
            switch (m.Msg)
            {
                case WM_NCHITTEST:
                    base.WndProc(ref m);
                    var hitPoint = this.PointToClient(new Point(m.LParam.ToInt32() & 0xffff, m.LParam.ToInt32() >> 16));
                    if (sizeGripRectangle.Contains(hitPoint))
                        m.Result = new IntPtr(HTBOTTOMRIGHT);
                    break;
                default:
                    base.WndProc(ref m);
                    break;
            }
        }
        public CRUD(bean.Profesores profesores)
        {
            this.profesores = profesores;
            InitializeComponent();
        }

        private void CRUD_Load(object sender, EventArgs e)
        {
                lblUsuario.Text = "Bienvenido " + " " + "Profesor" + " " + profesores.nombre + " " + profesores.apellido;

        }
        

        private void pibCerrar_Click(object sender, EventArgs e)
        {
            if (MessageBox.Show("Desea salir de la aplicación", "Salir",
                MessageBoxButtons.YesNo, MessageBoxIcon.Question) == DialogResult.Yes)
                Application.Exit();
        }

        private void btnMenu02_Click(object sender, EventArgs e)
        {
            CrudProfesores frm = new CrudProfesores();
            frm.FormClosed += new FormClosedEventHandler(MostrarFormLogoAlCerrarForms);
            AbrirFormEnPanel(frm);
        }
        private void MostrarFormLogoAlCerrarForms(object sender, FormClosedEventArgs e)
        {
            MostrarFormLogo();
        }

        private void btnMenu01_Click(object sender, EventArgs e)
        {
            CrudEstudiante frm = new CrudEstudiante();
            frm.FormClosed += new FormClosedEventHandler(MostrarFormLogoAlCerrarForms);
            AbrirFormEnPanel(frm);

        }

        private void btnSubMenu_Enter(object sender, EventArgs e)
        {
                
        }

        private void lblUsuario_Click(object sender, EventArgs e)
        {

        }

        private void btncerrarsesion_Click(object sender, EventArgs e)
        {

            if (MessageBox.Show("¿Desea Cerrar Sesion?", "Salir",
                MessageBoxButtons.YesNo, MessageBoxIcon.Question) == DialogResult.Yes)
            {
                frmlogin ventana = new frmlogin();
                ventana.Show();
                this.Hide();
            }
        }
       

        private void lblHora_Click(object sender, EventArgs e)
        {

        }

        private void pnlCrud_Titulo_Paint(object sender, PaintEventArgs e)
        {

        }
        [DllImport("user32.DLL", EntryPoint = "ReleaseCapture")]
        private extern static void ReleaseCapture();

        [DllImport("user32.DLL", EntryPoint = "SendMessage")]
        private extern static void SendMessage(System.IntPtr hWnd, int wMsg, int wParam, int lParam);

        private void PanelBarraTitulo_MouseDown(object sender, MouseEventArgs e)
        {
            ReleaseCapture();
            SendMessage(this.Handle, 0x112, 0xf012, 0);
        }
        private void AbrirFormEnPanel(object formHijo)
        {
            if (this.panelContenedorForm.Controls.Count > 0)
                this.panelContenedorForm.Controls.RemoveAt(0);
            Form fh = formHijo as Form;
            fh.TopLevel = false;
            fh.FormBorderStyle = FormBorderStyle.None;
            fh.Dock = DockStyle.Fill;
            this.panelContenedorForm.Controls.Add(fh);
            this.panelContenedorForm.Tag = fh;
            fh.Show();
        }
        private void MostrarFormLogo()
        {
            AbrirFormEnPanel(new fondo());
        }

        

        private void panel1_Paint(object sender, PaintEventArgs e)
        {

        }
    }
}
