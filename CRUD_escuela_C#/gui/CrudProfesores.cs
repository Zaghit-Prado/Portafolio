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
    public partial class CrudProfesores : Form
    {
        bean.Cargo cargo = new bean.Cargo();
        bean.Prof prof = new bean.Prof();
        dao.daoProfesores daoProfesores = new dao.daoProfesores();
        DataTable dtRegistros = new DataTable();
        private string id = null;

        private bool edit = false;
        private int posicion;

        public CrudProfesores()
        {
            InitializeComponent();
        }

        private void CrudProfesores_Load(object sender, EventArgs e)
        {
            // TODO: esta línea de código carga datos en la tabla 'crudEscuelaDataSet41.sp_getCargos' Puede moverla o quitarla según sea necesario.
            this.sp_getCargosTableAdapter2.Fill(this.crudEscuelaDataSet41.sp_getCargos);
            getProf();
        }
        private void getProf()
        {
            dtRegistros = daoProfesores.getProf();
            dgvprof.DataSource = dtRegistros;

        }

        private void dataGridView1_CellContentClick(object sender, DataGridViewCellEventArgs e)
        {
            posicion = dgvprof.CurrentRow.Index;    
        }

        private void btnAgregar_Click(object sender, EventArgs e)
        {
            if (txtDNI.Text.Trim() == "" || txtNombre.Text.Trim() == "" || txtApePa.Text.Trim() == "" || txtApeM.Text.Trim() == "" || txtContra.Text.Trim() == "" || cbxidCargo.Text.Trim() == "")
            {
                MessageBox.Show("Faltan Datos...");
                return;
            }
            if (edit == false)
            {
                prof.dni = txtDNI.Text.Trim();
                prof.nombre = txtNombre.Text.Trim();
                prof.apellido = txtApePa.Text.Trim();
                prof.apellidoM = txtApeM.Text.Trim();
                prof.contraseña= txtContra.Text.Trim();
                prof.IdCargo = cbxidCargo.Text.Trim();

                daoProfesores.Guardar(prof);
                getProf();
            }
        }

        private void txtidCarg_TextChanged(object sender, EventArgs e)
        {

        }

        private void boxCargo_SelectedIndexChanged(object sender, EventArgs e)
        {

        }

        private void btnEliminar_Click(object sender, EventArgs e)
        {
            
         if(MessageBox.Show("¿Desea eliminar a este docente? ", "Eliminar",
            MessageBoxButtons.YesNo) == DialogResult.Yes)
                {
                if (dgvprof.SelectedRows.Count > 0)
                {
                    id = dgvprof.CurrentRow.Cells["id"].Value.ToString();
                    daoProfesores.delete(int.Parse(id));
                    getProf();
                }
                else
                {
                    MessageBox.Show("No a seleccionadoun una fila entera...");
                }
            }
            }

        private void txtsolonum(object sender, KeyPressEventArgs e)
        {
            if (!char.IsDigit(e.KeyChar) && !(e.KeyChar == (char)Keys.Back))
                e.Handled = true;
        }

        private void btnLimpiar_Click(object sender, EventArgs e)
        {
            bean.Limpiar limpiar = new bean.Limpiar();
            limpiar.Borrartxt(panel1);
        }

        private void btnEditar_Click(object sender, EventArgs e)
        {
             
            
        }

        private void HoraFecha_Tick(object sender, EventArgs e)
        {
            lblHora.Text = DateTime.Now.ToString("hh:mm:ss");
            lblFecha.Text = DateTime.Now.ToLongDateString();
        }
    }
    }

