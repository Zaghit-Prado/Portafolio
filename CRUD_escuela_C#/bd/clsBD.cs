using System;
using System.Windows.Forms;
using System.Data;
using System.Data.SqlClient;
using System.Configuration;

namespace escuela.bd
{
    internal class clsBD
    {
        SqlConnection cn = null;
        SqlCommand cmd = null;
        SqlDataAdapter da = null;
        public clsBD(string cnBD)
        {
            cn = new SqlConnection(ConfigurationManager.ConnectionStrings[cnBD].ConnectionString);
        }

        internal int Ejecutar()
        {
            if (cn.State == ConnectionState.Closed) cn.Open();
            return cmd.ExecuteNonQuery();
        }

        internal void Sentencia(string SQL)
        {
            cmd = new SqlCommand(SQL, cn);
        }
        internal DataSet getDataSet()
        {

            DataSet dt = new DataSet();

            da = new SqlDataAdapter(cmd);
            da.Fill(dt);
            return dt;
        }
        internal DataTable getDataTable()
        {
            DataTable dt = new DataTable();

            da = new SqlDataAdapter(cmd);

            da.Fill(dt);
            return dt;
        }


        internal DataRow getDataRow()
        {
            DataTable dt = new DataTable();

            da = new SqlDataAdapter(cmd);

            da.Fill(dt);
            return dt.Rows.Count > 0 ? dt.Rows[0] : null;
        }

        internal void getComboBox(ComboBox comboBox)
        {
            getComboBox(comboBox, null);
        }
        internal void getComboBox(ComboBox comboBox, string item)
        {
            DataTable dt = getDataTable();
            if (item == null)
            {
                DataRow dr = dt.NewRow();
                dr[1] = item;

                dt.Rows.InsertAt(dr, 0);
            }
            comboBox.DataSource = dt;
            comboBox.DisplayMember = dt.Columns[1].ColumnName;
            comboBox.ValueMember = dt.Columns[0].ColumnName;
        }
        internal void getListBox(ListBox ListBox)
        {
            getListBox(ListBox, null);

        }
        internal void getListBox(ListBox ListBox, string item)
        {
            DataTable dt = getDataTable();
            if (item == null)
            {
                DataRow dr = dt.NewRow();
                dr[1] = item;

                dt.Rows.InsertAt(dr, 0);
            }

            ListBox.DataSource = dt;
            ListBox.DisplayMember = dt.Columns[1].ColumnName;
            ListBox.ValueMember = dt.Columns[0].ColumnName;

        }
    }
}
