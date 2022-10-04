namespace escuela.gui
{
    partial class CrudProfesores
    {
        /// <summary>
        /// Required designer variable.
        /// </summary>
        private System.ComponentModel.IContainer components = null;

        /// <summary>
        /// Clean up any resources being used.
        /// </summary>
        /// <param name="disposing">true if managed resources should be disposed; otherwise, false.</param>
        protected override void Dispose(bool disposing)
        {
            if (disposing && (components != null))
            {
                components.Dispose();
            }
            base.Dispose(disposing);
        }

        #region Windows Form Designer generated code

        /// <summary>
        /// Required method for Designer support - do not modify
        /// the contents of this method with the code editor.
        /// </summary>
        private void InitializeComponent()
        {
            this.components = new System.ComponentModel.Container();
            System.Windows.Forms.DataGridViewCellStyle dataGridViewCellStyle1 = new System.Windows.Forms.DataGridViewCellStyle();
            System.Windows.Forms.DataGridViewCellStyle dataGridViewCellStyle2 = new System.Windows.Forms.DataGridViewCellStyle();
            System.ComponentModel.ComponentResourceManager resources = new System.ComponentModel.ComponentResourceManager(typeof(CrudProfesores));
            this.dgvprof = new System.Windows.Forms.DataGridView();
            this.spgetprofesoresBindingSource = new System.Windows.Forms.BindingSource(this.components);
            this.crudEscuelaDataSet1 = new escuela.CrudEscuelaDataSet1();
            this.sp_getprofesoresTableAdapter = new escuela.CrudEscuelaDataSet1TableAdapters.sp_getprofesoresTableAdapter();
            this.panel1 = new System.Windows.Forms.Panel();
            this.btnLimpiar = new System.Windows.Forms.Button();
            this.label8 = new System.Windows.Forms.Label();
            this.label7 = new System.Windows.Forms.Label();
            this.dataGridView1 = new System.Windows.Forms.DataGridView();
            this.cargoDataGridViewTextBoxColumn = new System.Windows.Forms.DataGridViewTextBoxColumn();
            this.spgetCargosBindingSource2 = new System.Windows.Forms.BindingSource(this.components);
            this.crudEscuelaDataSet41 = new escuela.CrudEscuelaDataSet4();
            this.cbxidCargo = new System.Windows.Forms.ComboBox();
            this.txtContra = new System.Windows.Forms.Label();
            this.textBox1 = new System.Windows.Forms.TextBox();
            this.label5 = new System.Windows.Forms.Label();
            this.label4 = new System.Windows.Forms.Label();
            this.label3 = new System.Windows.Forms.Label();
            this.label2 = new System.Windows.Forms.Label();
            this.label1 = new System.Windows.Forms.Label();
            this.txtApeM = new System.Windows.Forms.TextBox();
            this.txtApePa = new System.Windows.Forms.TextBox();
            this.txtNombre = new System.Windows.Forms.TextBox();
            this.txtDNI = new System.Windows.Forms.TextBox();
            this.btnAgregar = new System.Windows.Forms.Button();
            this.spgetCargosBindingSource1 = new System.Windows.Forms.BindingSource(this.components);
            this.crudEscuelaDataSet3 = new escuela.CrudEscuelaDataSet3();
            this.crudEscuelaDataSet2 = new escuela.CrudEscuelaDataSet2();
            this.spgetCargosBindingSource = new System.Windows.Forms.BindingSource(this.components);
            this.sp_getCargosTableAdapter = new escuela.CrudEscuelaDataSet2TableAdapters.sp_getCargosTableAdapter();
            this.label6 = new System.Windows.Forms.Label();
            this.btnBorrar = new System.Windows.Forms.Button();
            this.sp_getCargosTableAdapter1 = new escuela.CrudEscuelaDataSet3TableAdapters.sp_getCargosTableAdapter();
            this.crudEscuelaDataSet4 = new escuela.CrudEscuelaDataSet();
            this.sp_getCargosTableAdapter2 = new escuela.CrudEscuelaDataSet4TableAdapters.sp_getCargosTableAdapter();
            this.lblFecha = new System.Windows.Forms.Label();
            this.lblHora = new System.Windows.Forms.Label();
            this.HoraFecha = new System.Windows.Forms.Timer(this.components);
            ((System.ComponentModel.ISupportInitialize)(this.dgvprof)).BeginInit();
            ((System.ComponentModel.ISupportInitialize)(this.spgetprofesoresBindingSource)).BeginInit();
            ((System.ComponentModel.ISupportInitialize)(this.crudEscuelaDataSet1)).BeginInit();
            this.panel1.SuspendLayout();
            ((System.ComponentModel.ISupportInitialize)(this.dataGridView1)).BeginInit();
            ((System.ComponentModel.ISupportInitialize)(this.spgetCargosBindingSource2)).BeginInit();
            ((System.ComponentModel.ISupportInitialize)(this.crudEscuelaDataSet41)).BeginInit();
            ((System.ComponentModel.ISupportInitialize)(this.spgetCargosBindingSource1)).BeginInit();
            ((System.ComponentModel.ISupportInitialize)(this.crudEscuelaDataSet3)).BeginInit();
            ((System.ComponentModel.ISupportInitialize)(this.crudEscuelaDataSet2)).BeginInit();
            ((System.ComponentModel.ISupportInitialize)(this.spgetCargosBindingSource)).BeginInit();
            ((System.ComponentModel.ISupportInitialize)(this.crudEscuelaDataSet4)).BeginInit();
            this.SuspendLayout();
            // 
            // dgvprof
            // 
            this.dgvprof.AllowUserToAddRows = false;
            this.dgvprof.AllowUserToDeleteRows = false;
            this.dgvprof.BackgroundColor = System.Drawing.Color.FromArgb(((int)(((byte)(38)))), ((int)(((byte)(50)))), ((int)(((byte)(62)))));
            this.dgvprof.BorderStyle = System.Windows.Forms.BorderStyle.None;
            this.dgvprof.ColumnHeadersHeightSizeMode = System.Windows.Forms.DataGridViewColumnHeadersHeightSizeMode.AutoSize;
            dataGridViewCellStyle1.Alignment = System.Windows.Forms.DataGridViewContentAlignment.MiddleLeft;
            dataGridViewCellStyle1.BackColor = System.Drawing.Color.FromArgb(((int)(((byte)(1)))), ((int)(((byte)(0)))), ((int)(((byte)(18)))));
            dataGridViewCellStyle1.Font = new System.Drawing.Font("Microsoft Sans Serif", 8.25F, System.Drawing.FontStyle.Regular, System.Drawing.GraphicsUnit.Point, ((byte)(0)));
            dataGridViewCellStyle1.ForeColor = System.Drawing.SystemColors.ControlText;
            dataGridViewCellStyle1.SelectionBackColor = System.Drawing.SystemColors.Highlight;
            dataGridViewCellStyle1.SelectionForeColor = System.Drawing.SystemColors.HighlightText;
            dataGridViewCellStyle1.WrapMode = System.Windows.Forms.DataGridViewTriState.False;
            this.dgvprof.DefaultCellStyle = dataGridViewCellStyle1;
            this.dgvprof.Location = new System.Drawing.Point(35, 194);
            this.dgvprof.Name = "dgvprof";
            this.dgvprof.ReadOnly = true;
            this.dgvprof.Size = new System.Drawing.Size(643, 214);
            this.dgvprof.TabIndex = 0;
            this.dgvprof.CellContentClick += new System.Windows.Forms.DataGridViewCellEventHandler(this.dataGridView1_CellContentClick);
            // 
            // spgetprofesoresBindingSource
            // 
            this.spgetprofesoresBindingSource.DataMember = "sp_getprofesores";
            this.spgetprofesoresBindingSource.DataSource = this.crudEscuelaDataSet1;
            // 
            // crudEscuelaDataSet1
            // 
            this.crudEscuelaDataSet1.DataSetName = "CrudEscuelaDataSet1";
            this.crudEscuelaDataSet1.SchemaSerializationMode = System.Data.SchemaSerializationMode.IncludeSchema;
            // 
            // sp_getprofesoresTableAdapter
            // 
            this.sp_getprofesoresTableAdapter.ClearBeforeFill = true;
            // 
            // panel1
            // 
            this.panel1.BackColor = System.Drawing.Color.Transparent;
            this.panel1.BackgroundImage = global::escuela.Properties.Resources.sky;
            this.panel1.Controls.Add(this.btnLimpiar);
            this.panel1.Controls.Add(this.label8);
            this.panel1.Controls.Add(this.label7);
            this.panel1.Controls.Add(this.dataGridView1);
            this.panel1.Controls.Add(this.cbxidCargo);
            this.panel1.Controls.Add(this.txtContra);
            this.panel1.Controls.Add(this.textBox1);
            this.panel1.Controls.Add(this.label5);
            this.panel1.Controls.Add(this.label4);
            this.panel1.Controls.Add(this.label3);
            this.panel1.Controls.Add(this.label2);
            this.panel1.Controls.Add(this.label1);
            this.panel1.Controls.Add(this.txtApeM);
            this.panel1.Controls.Add(this.txtApePa);
            this.panel1.Controls.Add(this.txtNombre);
            this.panel1.Controls.Add(this.txtDNI);
            this.panel1.Controls.Add(this.btnAgregar);
            this.panel1.Location = new System.Drawing.Point(17, 40);
            this.panel1.Name = "panel1";
            this.panel1.Size = new System.Drawing.Size(688, 135);
            this.panel1.TabIndex = 2;
            // 
            // btnLimpiar
            // 
            this.btnLimpiar.BackColor = System.Drawing.Color.FromArgb(((int)(((byte)(38)))), ((int)(((byte)(50)))), ((int)(((byte)(62)))));
            this.btnLimpiar.FlatStyle = System.Windows.Forms.FlatStyle.Popup;
            this.btnLimpiar.Font = new System.Drawing.Font("Microsoft Sans Serif", 12F, System.Drawing.FontStyle.Bold, System.Drawing.GraphicsUnit.Point, ((byte)(0)));
            this.btnLimpiar.ForeColor = System.Drawing.Color.White;
            this.btnLimpiar.Location = new System.Drawing.Point(581, 93);
            this.btnLimpiar.Name = "btnLimpiar";
            this.btnLimpiar.Size = new System.Drawing.Size(94, 31);
            this.btnLimpiar.TabIndex = 30;
            this.btnLimpiar.Text = "Limpiar";
            this.btnLimpiar.UseVisualStyleBackColor = false;
            this.btnLimpiar.Click += new System.EventHandler(this.btnLimpiar_Click);
            // 
            // label8
            // 
            this.label8.AutoSize = true;
            this.label8.ForeColor = System.Drawing.Color.White;
            this.label8.Location = new System.Drawing.Point(449, 50);
            this.label8.Name = "label8";
            this.label8.Size = new System.Drawing.Size(60, 13);
            this.label8.TabIndex = 10;
            this.label8.Text = "Seleccione";
            // 
            // label7
            // 
            this.label7.AutoSize = true;
            this.label7.ForeColor = System.Drawing.Color.White;
            this.label7.Location = new System.Drawing.Point(453, 63);
            this.label7.Name = "label7";
            this.label7.Size = new System.Drawing.Size(55, 13);
            this.label7.TabIndex = 10;
            this.label7.Text = " su Cargo:";
            // 
            // dataGridView1
            // 
            this.dataGridView1.AllowUserToAddRows = false;
            this.dataGridView1.AllowUserToDeleteRows = false;
            this.dataGridView1.AutoGenerateColumns = false;
            this.dataGridView1.BackgroundColor = System.Drawing.Color.FromArgb(((int)(((byte)(1)))), ((int)(((byte)(0)))), ((int)(((byte)(18)))));
            this.dataGridView1.BorderStyle = System.Windows.Forms.BorderStyle.None;
            this.dataGridView1.ColumnHeadersHeightSizeMode = System.Windows.Forms.DataGridViewColumnHeadersHeightSizeMode.AutoSize;
            this.dataGridView1.Columns.AddRange(new System.Windows.Forms.DataGridViewColumn[] {
            this.cargoDataGridViewTextBoxColumn});
            this.dataGridView1.DataSource = this.spgetCargosBindingSource2;
            dataGridViewCellStyle2.Alignment = System.Windows.Forms.DataGridViewContentAlignment.MiddleLeft;
            dataGridViewCellStyle2.BackColor = System.Drawing.Color.FromArgb(((int)(((byte)(1)))), ((int)(((byte)(0)))), ((int)(((byte)(18)))));
            dataGridViewCellStyle2.Font = new System.Drawing.Font("Microsoft Sans Serif", 8.25F, System.Drawing.FontStyle.Regular, System.Drawing.GraphicsUnit.Point, ((byte)(0)));
            dataGridViewCellStyle2.ForeColor = System.Drawing.SystemColors.ControlText;
            dataGridViewCellStyle2.SelectionBackColor = System.Drawing.SystemColors.Highlight;
            dataGridViewCellStyle2.SelectionForeColor = System.Drawing.SystemColors.HighlightText;
            dataGridViewCellStyle2.WrapMode = System.Windows.Forms.DataGridViewTriState.False;
            this.dataGridView1.DefaultCellStyle = dataGridViewCellStyle2;
            this.dataGridView1.Location = new System.Drawing.Point(515, 9);
            this.dataGridView1.Name = "dataGridView1";
            this.dataGridView1.ReadOnly = true;
            this.dataGridView1.Size = new System.Drawing.Size(160, 78);
            this.dataGridView1.TabIndex = 9;
            // 
            // cargoDataGridViewTextBoxColumn
            // 
            this.cargoDataGridViewTextBoxColumn.DataPropertyName = "cargo";
            this.cargoDataGridViewTextBoxColumn.HeaderText = "cargo";
            this.cargoDataGridViewTextBoxColumn.Name = "cargoDataGridViewTextBoxColumn";
            this.cargoDataGridViewTextBoxColumn.ReadOnly = true;
            // 
            // spgetCargosBindingSource2
            // 
            this.spgetCargosBindingSource2.DataMember = "sp_getCargos";
            this.spgetCargosBindingSource2.DataSource = this.crudEscuelaDataSet41;
            // 
            // crudEscuelaDataSet41
            // 
            this.crudEscuelaDataSet41.DataSetName = "CrudEscuelaDataSet4";
            this.crudEscuelaDataSet41.SchemaSerializationMode = System.Data.SchemaSerializationMode.IncludeSchema;
            // 
            // cbxidCargo
            // 
            this.cbxidCargo.DataSource = this.spgetCargosBindingSource2;
            this.cbxidCargo.DisplayMember = "idCargo";
            this.cbxidCargo.FormattingEnabled = true;
            this.cbxidCargo.Location = new System.Drawing.Point(324, 96);
            this.cbxidCargo.Name = "cbxidCargo";
            this.cbxidCargo.Size = new System.Drawing.Size(111, 21);
            this.cbxidCargo.TabIndex = 8;
            // 
            // txtContra
            // 
            this.txtContra.AutoSize = true;
            this.txtContra.ForeColor = System.Drawing.Color.White;
            this.txtContra.Location = new System.Drawing.Point(321, 14);
            this.txtContra.Name = "txtContra";
            this.txtContra.Size = new System.Drawing.Size(67, 13);
            this.txtContra.TabIndex = 7;
            this.txtContra.Text = "Contraseña: ";
            // 
            // textBox1
            // 
            this.textBox1.Location = new System.Drawing.Point(324, 31);
            this.textBox1.MaxLength = 6;
            this.textBox1.Name = "textBox1";
            this.textBox1.Size = new System.Drawing.Size(111, 20);
            this.textBox1.TabIndex = 6;
            this.textBox1.KeyPress += new System.Windows.Forms.KeyPressEventHandler(this.txtsolonum);
            // 
            // label5
            // 
            this.label5.AutoSize = true;
            this.label5.ForeColor = System.Drawing.Color.White;
            this.label5.Location = new System.Drawing.Point(321, 77);
            this.label5.Name = "label5";
            this.label5.Size = new System.Drawing.Size(44, 13);
            this.label5.TabIndex = 5;
            this.label5.Text = "Cargo:: ";
            // 
            // label4
            // 
            this.label4.AutoSize = true;
            this.label4.ForeColor = System.Drawing.Color.White;
            this.label4.Location = new System.Drawing.Point(170, 76);
            this.label4.Name = "label4";
            this.label4.Size = new System.Drawing.Size(92, 13);
            this.label4.TabIndex = 4;
            this.label4.Text = "Apellido Materno: ";
            // 
            // label3
            // 
            this.label3.AutoSize = true;
            this.label3.ForeColor = System.Drawing.Color.White;
            this.label3.Location = new System.Drawing.Point(170, 12);
            this.label3.Name = "label3";
            this.label3.Size = new System.Drawing.Size(90, 13);
            this.label3.TabIndex = 3;
            this.label3.Text = "Apellido Paterno: ";
            // 
            // label2
            // 
            this.label2.AutoSize = true;
            this.label2.ForeColor = System.Drawing.Color.White;
            this.label2.Location = new System.Drawing.Point(15, 75);
            this.label2.Name = "label2";
            this.label2.Size = new System.Drawing.Size(50, 13);
            this.label2.TabIndex = 3;
            this.label2.Text = "Nombre: ";
            // 
            // label1
            // 
            this.label1.AutoSize = true;
            this.label1.ForeColor = System.Drawing.Color.White;
            this.label1.Location = new System.Drawing.Point(18, 12);
            this.label1.Name = "label1";
            this.label1.Size = new System.Drawing.Size(32, 13);
            this.label1.TabIndex = 3;
            this.label1.Text = "DNI: ";
            // 
            // txtApeM
            // 
            this.txtApeM.Location = new System.Drawing.Point(173, 93);
            this.txtApeM.Name = "txtApeM";
            this.txtApeM.Size = new System.Drawing.Size(130, 20);
            this.txtApeM.TabIndex = 1;
            // 
            // txtApePa
            // 
            this.txtApePa.Location = new System.Drawing.Point(173, 30);
            this.txtApePa.Name = "txtApePa";
            this.txtApePa.Size = new System.Drawing.Size(130, 20);
            this.txtApePa.TabIndex = 1;
            // 
            // txtNombre
            // 
            this.txtNombre.Location = new System.Drawing.Point(18, 93);
            this.txtNombre.Name = "txtNombre";
            this.txtNombre.Size = new System.Drawing.Size(130, 20);
            this.txtNombre.TabIndex = 1;
            // 
            // txtDNI
            // 
            this.txtDNI.Location = new System.Drawing.Point(18, 31);
            this.txtDNI.MaxLength = 8;
            this.txtDNI.Name = "txtDNI";
            this.txtDNI.Size = new System.Drawing.Size(130, 20);
            this.txtDNI.TabIndex = 1;
            this.txtDNI.KeyPress += new System.Windows.Forms.KeyPressEventHandler(this.txtsolonum);
            // 
            // btnAgregar
            // 
            this.btnAgregar.BackColor = System.Drawing.Color.FromArgb(((int)(((byte)(38)))), ((int)(((byte)(50)))), ((int)(((byte)(62)))));
            this.btnAgregar.FlatStyle = System.Windows.Forms.FlatStyle.Popup;
            this.btnAgregar.Font = new System.Drawing.Font("Microsoft Sans Serif", 12F, System.Drawing.FontStyle.Bold, System.Drawing.GraphicsUnit.Point, ((byte)(0)));
            this.btnAgregar.ForeColor = System.Drawing.Color.White;
            this.btnAgregar.Location = new System.Drawing.Point(466, 93);
            this.btnAgregar.Name = "btnAgregar";
            this.btnAgregar.Size = new System.Drawing.Size(94, 31);
            this.btnAgregar.TabIndex = 0;
            this.btnAgregar.Text = "Guardar";
            this.btnAgregar.UseVisualStyleBackColor = false;
            this.btnAgregar.Click += new System.EventHandler(this.btnAgregar_Click);
            // 
            // spgetCargosBindingSource1
            // 
            this.spgetCargosBindingSource1.DataMember = "sp_getCargos";
            this.spgetCargosBindingSource1.DataSource = this.crudEscuelaDataSet3;
            // 
            // crudEscuelaDataSet3
            // 
            this.crudEscuelaDataSet3.DataSetName = "CrudEscuelaDataSet3";
            this.crudEscuelaDataSet3.SchemaSerializationMode = System.Data.SchemaSerializationMode.IncludeSchema;
            // 
            // crudEscuelaDataSet2
            // 
            this.crudEscuelaDataSet2.DataSetName = "CrudEscuelaDataSet2";
            this.crudEscuelaDataSet2.SchemaSerializationMode = System.Data.SchemaSerializationMode.IncludeSchema;
            // 
            // spgetCargosBindingSource
            // 
            this.spgetCargosBindingSource.DataMember = "sp_getCargos";
            this.spgetCargosBindingSource.DataSource = this.crudEscuelaDataSet2;
            // 
            // sp_getCargosTableAdapter
            // 
            this.sp_getCargosTableAdapter.ClearBeforeFill = true;
            // 
            // label6
            // 
            this.label6.AutoSize = true;
            this.label6.Font = new System.Drawing.Font("Microsoft Sans Serif", 14.25F, System.Drawing.FontStyle.Bold, System.Drawing.GraphicsUnit.Point, ((byte)(0)));
            this.label6.ForeColor = System.Drawing.Color.FromArgb(((int)(((byte)(67)))), ((int)(((byte)(152)))), ((int)(((byte)(249)))));
            this.label6.Location = new System.Drawing.Point(13, 13);
            this.label6.Name = "label6";
            this.label6.Size = new System.Drawing.Size(462, 24);
            this.label6.TabIndex = 3;
            this.label6.Text = "AGREGAR O EDITAR REGISTRO DE DOCENTE";
            // 
            // btnBorrar
            // 
            this.btnBorrar.BackColor = System.Drawing.Color.Transparent;
            this.btnBorrar.BackgroundImage = ((System.Drawing.Image)(resources.GetObject("btnBorrar.BackgroundImage")));
            this.btnBorrar.FlatStyle = System.Windows.Forms.FlatStyle.Popup;
            this.btnBorrar.Font = new System.Drawing.Font("Microsoft Sans Serif", 12F, System.Drawing.FontStyle.Bold);
            this.btnBorrar.ForeColor = System.Drawing.Color.White;
            this.btnBorrar.Location = new System.Drawing.Point(35, 432);
            this.btnBorrar.Name = "btnBorrar";
            this.btnBorrar.Size = new System.Drawing.Size(89, 32);
            this.btnBorrar.TabIndex = 4;
            this.btnBorrar.Text = "Borrar";
            this.btnBorrar.UseVisualStyleBackColor = false;
            this.btnBorrar.Click += new System.EventHandler(this.btnEliminar_Click);
            // 
            // sp_getCargosTableAdapter1
            // 
            this.sp_getCargosTableAdapter1.ClearBeforeFill = true;
            // 
            // crudEscuelaDataSet4
            // 
            this.crudEscuelaDataSet4.DataSetName = "CrudEscuelaDataSet";
            this.crudEscuelaDataSet4.SchemaSerializationMode = System.Data.SchemaSerializationMode.IncludeSchema;
            // 
            // sp_getCargosTableAdapter2
            // 
            this.sp_getCargosTableAdapter2.ClearBeforeFill = true;
            // 
            // lblFecha
            // 
            this.lblFecha.AutoSize = true;
            this.lblFecha.Font = new System.Drawing.Font("Microsoft Sans Serif", 9.75F, System.Drawing.FontStyle.Bold, System.Drawing.GraphicsUnit.Point, ((byte)(0)));
            this.lblFecha.ForeColor = System.Drawing.Color.White;
            this.lblFecha.Location = new System.Drawing.Point(500, 448);
            this.lblFecha.Name = "lblFecha";
            this.lblFecha.Size = new System.Drawing.Size(0, 16);
            this.lblFecha.TabIndex = 5;
            // 
            // lblHora
            // 
            this.lblHora.AutoSize = true;
            this.lblHora.Font = new System.Drawing.Font("Microsoft Sans Serif", 26.25F, System.Drawing.FontStyle.Bold, System.Drawing.GraphicsUnit.Point, ((byte)(0)));
            this.lblHora.ForeColor = System.Drawing.Color.FromArgb(((int)(((byte)(67)))), ((int)(((byte)(152)))), ((int)(((byte)(249)))));
            this.lblHora.Location = new System.Drawing.Point(544, 409);
            this.lblHora.Name = "lblHora";
            this.lblHora.Size = new System.Drawing.Size(0, 39);
            this.lblHora.TabIndex = 6;
            // 
            // HoraFecha
            // 
            this.HoraFecha.Enabled = true;
            this.HoraFecha.Tick += new System.EventHandler(this.HoraFecha_Tick);
            // 
            // CrudProfesores
            // 
            this.AutoScaleDimensions = new System.Drawing.SizeF(6F, 13F);
            this.AutoScaleMode = System.Windows.Forms.AutoScaleMode.Font;
            this.BackColor = System.Drawing.Color.FromArgb(((int)(((byte)(38)))), ((int)(((byte)(50)))), ((int)(((byte)(62)))));
            this.ClientSize = new System.Drawing.Size(717, 475);
            this.Controls.Add(this.lblHora);
            this.Controls.Add(this.lblFecha);
            this.Controls.Add(this.btnBorrar);
            this.Controls.Add(this.label6);
            this.Controls.Add(this.panel1);
            this.Controls.Add(this.dgvprof);
            this.FormBorderStyle = System.Windows.Forms.FormBorderStyle.None;
            this.Name = "CrudProfesores";
            this.StartPosition = System.Windows.Forms.FormStartPosition.Manual;
            this.Tag = "123";
            this.Text = "CrudProfesores";
            this.Load += new System.EventHandler(this.CrudProfesores_Load);
            ((System.ComponentModel.ISupportInitialize)(this.dgvprof)).EndInit();
            ((System.ComponentModel.ISupportInitialize)(this.spgetprofesoresBindingSource)).EndInit();
            ((System.ComponentModel.ISupportInitialize)(this.crudEscuelaDataSet1)).EndInit();
            this.panel1.ResumeLayout(false);
            this.panel1.PerformLayout();
            ((System.ComponentModel.ISupportInitialize)(this.dataGridView1)).EndInit();
            ((System.ComponentModel.ISupportInitialize)(this.spgetCargosBindingSource2)).EndInit();
            ((System.ComponentModel.ISupportInitialize)(this.crudEscuelaDataSet41)).EndInit();
            ((System.ComponentModel.ISupportInitialize)(this.spgetCargosBindingSource1)).EndInit();
            ((System.ComponentModel.ISupportInitialize)(this.crudEscuelaDataSet3)).EndInit();
            ((System.ComponentModel.ISupportInitialize)(this.crudEscuelaDataSet2)).EndInit();
            ((System.ComponentModel.ISupportInitialize)(this.spgetCargosBindingSource)).EndInit();
            ((System.ComponentModel.ISupportInitialize)(this.crudEscuelaDataSet4)).EndInit();
            this.ResumeLayout(false);
            this.PerformLayout();

        }

        #endregion

        private System.Windows.Forms.DataGridView dgvprof;
        private CrudEscuelaDataSet1 crudEscuelaDataSet1;
        private System.Windows.Forms.BindingSource spgetprofesoresBindingSource;
        private CrudEscuelaDataSet1TableAdapters.sp_getprofesoresTableAdapter sp_getprofesoresTableAdapter;
        private System.Windows.Forms.Panel panel1;
        private System.Windows.Forms.TextBox txtApeM;
        private System.Windows.Forms.TextBox txtApePa;
        private System.Windows.Forms.TextBox txtNombre;
        private System.Windows.Forms.TextBox txtDNI;
        private System.Windows.Forms.Button btnAgregar;
        private CrudEscuelaDataSet2 crudEscuelaDataSet2;
        private System.Windows.Forms.BindingSource spgetCargosBindingSource;
        private CrudEscuelaDataSet2TableAdapters.sp_getCargosTableAdapter sp_getCargosTableAdapter;
        private System.Windows.Forms.Label label5;
        private System.Windows.Forms.Label label4;
        private System.Windows.Forms.Label label3;
        private System.Windows.Forms.Label label2;
        private System.Windows.Forms.Label label1;
        private System.Windows.Forms.Label label6;
        private System.Windows.Forms.Button btnBorrar;
        private CrudEscuelaDataSet3 crudEscuelaDataSet3;
        private System.Windows.Forms.BindingSource spgetCargosBindingSource1;
        private CrudEscuelaDataSet3TableAdapters.sp_getCargosTableAdapter sp_getCargosTableAdapter1;
        private CrudEscuelaDataSet crudEscuelaDataSet4;
        private System.Windows.Forms.Label txtContra;
        private System.Windows.Forms.TextBox textBox1;
        private System.Windows.Forms.DataGridView dataGridView1;
        private CrudEscuelaDataSet4 crudEscuelaDataSet41;
        private System.Windows.Forms.BindingSource spgetCargosBindingSource2;
        private CrudEscuelaDataSet4TableAdapters.sp_getCargosTableAdapter sp_getCargosTableAdapter2;
        private System.Windows.Forms.Label label7;
        private System.Windows.Forms.DataGridViewTextBoxColumn cargoDataGridViewTextBoxColumn;
        private System.Windows.Forms.Label label8;
        private System.Windows.Forms.Button btnLimpiar;
        private System.Windows.Forms.ComboBox cbxidCargo;
        private System.Windows.Forms.Label lblFecha;
        private System.Windows.Forms.Label lblHora;
        private System.Windows.Forms.Timer HoraFecha;
    }
}