using System;
using System.Collections.Generic;
using System.ComponentModel;
using System.Data;
using System.Drawing;
using System.Linq;
using System.Text;
using System.Threading.Tasks;
using System.Windows.Forms;

namespace escuela.gui
{
    public partial class CrudEstudiante : Form
    {
        bean.Estudiantes estudiantes = new bean.Estudiantes();
        dao.daoEstudiante daoEstudiante = new dao.daoEstudiante();
        DataTable dtRegistros = new DataTable();
        private string idEstudiante = null;
        private bool edit = false;
        public CrudEstudiante()
        {
            InitializeComponent();
        }

        private void CrudEstudiante_Load(object sender, EventArgs e)
        {
            getEstudiante();
        }

        private void getEstudiante()
        {
            dtRegistros = daoEstudiante.getEstudiante();
            dgvEstud.DataSource = dtRegistros;
        }

        private void btnAgregar_Click(object sender, EventArgs e)
        {
            if (txtNom.Text.Trim() == "" || txtDNI.Text.Trim() == "" || txtSecNom.Text.Trim() == "" || txtAPPA.Text.Trim() == "" || txtAPMA.Text.Trim() == "" || txtTelf.Text.Trim() == "" || txtEmail.Text.Trim() == "" || txtDireccion.Text.Trim() == "" || txtEdad.Text.Trim() == "" || txtEdad.Text.Trim() == "" || txtGrado.Text.Trim() == "" || txtSeccion.Text.Trim() == "")
            {
                MessageBox.Show("Ingrese todos los datos");
                return;
            }

            //insert students
            if (edit == false)
            {
                estudiantes.Nombre = txtNom.Text.Trim();
                estudiantes.dni = txtDNI.Text.Trim();
                estudiantes.Segnombre = txtSecNom.Text.Trim();
                estudiantes.Apellidop = txtAPPA.Text.Trim();
                estudiantes.Apellidom = txtAPMA.Text.Trim();
                estudiantes.Telf = txtTelf.Text.Trim();
                estudiantes.Direccion = txtDireccion.Text.Trim();
                estudiantes.Email = txtEmail.Text.Trim();
                estudiantes.fechaNa = fchNaci.Text.Trim();
                estudiantes.Edad = txtEdad.Text.Trim();
                estudiantes.grado = txtGrado.Text.Trim();
                estudiantes.seccion = txtSeccion.Text.Trim();

                daoEstudiante.Guardar(estudiantes);
                MessageBox.Show("Se guardo nuevo alumno"); 
                getEstudiante();
            }
            if (edit == true)
            {
                estudiantes.Nombre = txtNom.Text.Trim();
                estudiantes.dni = txtDNI.Text.Trim();
                estudiantes.Segnombre = txtSecNom.Text.Trim();
                estudiantes.Apellidop = txtAPPA.Text.Trim();
                estudiantes.Apellidom = txtAPMA.Text.Trim();
                estudiantes.Telf = txtTelf.Text.Trim();
                estudiantes.Direccion = txtDireccion.Text.Trim();
                estudiantes.Email = txtEmail.Text.Trim();
                estudiantes.fechaNa = fchNaci.Text.Trim();
                estudiantes.Edad = txtEdad.Text.Trim();
                estudiantes.grado = txtGrado.Text.Trim();
                estudiantes.seccion = txtSeccion.Text.Trim();
                estudiantes.idEstudiante = int.Parse(idEstudiante);
                daoEstudiante.Editar(estudiantes);
                getEstudiante();
                MessageBox.Show("¡Los datos fueron editasdos correctamente!");
                edit = false;
            }

        }

        private void txtDNI_TextChanged(object sender, EventArgs e)
        {

        }

        private void dgvEstud_CellContentClick(object sender, DataGridViewCellEventArgs e)
        {

        }

        private void btnLimpiar_Click(object sender, EventArgs e)
        {
            bean.Limpiar limpiar = new bean.Limpiar();
            limpiar.Borrartxt(panel1);
        }

        private void txtsolonum(object sender, KeyPressEventArgs e)
        {
            if (!char.IsDigit(e.KeyChar) && !(e.KeyChar == (char)Keys.Back))
                e.Handled = true;
        }

        private void btnEditar_Click(object sender, EventArgs e)
        {
            if (dgvEstud.SelectedRows.Count > 0)
            {
                edit = true;
                
                txtNom.Text = dgvEstud.CurrentRow.Cells["Nombre de Alumno"].Value.ToString();
                txtDNI.Text = dgvEstud.CurrentRow.Cells["DNI"].Value.ToString();
                txtSecNom.Text = dgvEstud.CurrentRow.Cells["Segundo Nombre"].Value.ToString();
                txtAPPA.Text = dgvEstud.CurrentRow.Cells["Apellido Paterno"].Value.ToString();
                txtAPMA.Text = dgvEstud.CurrentRow.Cells["Apellido Materno"].Value.ToString();
                txtTelf.Text = dgvEstud.CurrentRow.Cells["Telefono"].Value.ToString();
                txtDireccion.Text = dgvEstud.CurrentRow.Cells["Direccion"].Value.ToString();
                txtEmail.Text = dgvEstud.CurrentRow.Cells["Email"].Value.ToString();
                fchNaci.Text = dgvEstud.CurrentRow.Cells["Fecha de Nacimiento"].Value.ToString();
                txtEdad.Text = dgvEstud.CurrentRow.Cells["Edad"].Value.ToString();
                txtGrado.Text = dgvEstud.CurrentRow.Cells["Grado"].Value.ToString();
                txtSeccion.Text = dgvEstud.CurrentRow.Cells["Seccion"].Value.ToString();
                idEstudiante = dgvEstud.CurrentRow.Cells["ID"].Value.ToString();
            }

            else
            {
                MessageBox.Show("Selecciona una fila completa...");
            }
        }

        private void BtnCerrar_Click(object sender, EventArgs e)
        {
            this.Close();
        }

        private void btnBorrar_Click(object sender, EventArgs e)
        {
            if (MessageBox.Show("¿Desea eliminar este alumno? ", "Eliminar",
            MessageBoxButtons.YesNo) == DialogResult.Yes)
            {
                if (dgvEstud.SelectedRows.Count > 0)
                {
                    idEstudiante = dgvEstud.CurrentRow.Cells["idEstudiante"].Value.ToString();
                    daoEstudiante.eliminar(int.Parse(idEstudiante));
                    getEstudiante();
                }
                else
                {
                    MessageBox.Show("Selecciona una fila completa porfavor...");
                }
            }
        }

        private void HoraFecha_Tick(object sender, EventArgs e)
        {
            lblHora.Text = DateTime.Now.ToString("hh:mm:ss");
            lblFecha.Text = DateTime.Now.ToLongDateString();
        }

        private void panel1_Paint(object sender, PaintEventArgs e)
        {

        }
    }
}
