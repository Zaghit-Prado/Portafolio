namespace escuela.gui
{
    partial class CRUD
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
            System.ComponentModel.ComponentResourceManager resources = new System.ComponentModel.ComponentResourceManager(typeof(CRUD));
            this.crudEscuelaDataSet = new escuela.CrudEscuelaDataSet();
            this.cargoBindingSource = new System.Windows.Forms.BindingSource(this.components);
            this.cargoTableAdapter = new escuela.CrudEscuelaDataSetTableAdapters.cargoTableAdapter();
            this.panel1 = new System.Windows.Forms.Panel();
            this.pictureBox6 = new System.Windows.Forms.PictureBox();
            this.pictureBox5 = new System.Windows.Forms.PictureBox();
            this.pictureBox4 = new System.Windows.Forms.PictureBox();
            this.btncerrarsesion = new System.Windows.Forms.Button();
            this.pictureBox2 = new System.Windows.Forms.PictureBox();
            this.pictureBox3 = new System.Windows.Forms.PictureBox();
            this.lblUsuario = new System.Windows.Forms.Button();
            this.pictureBox1 = new System.Windows.Forms.PictureBox();
            this.btnMenu02 = new System.Windows.Forms.Button();
            this.btnMenu01 = new System.Windows.Forms.Button();
            this.tmContraerMenu = new System.Windows.Forms.Timer(this.components);
            this.tmExpandirMenu = new System.Windows.Forms.Timer(this.components);
            this.panelContenedorForm = new System.Windows.Forms.Panel();
            this.pnlCrud_Titulo = new System.Windows.Forms.Panel();
            this.panel2 = new System.Windows.Forms.Panel();
            this.pibCerrar = new System.Windows.Forms.PictureBox();
            ((System.ComponentModel.ISupportInitialize)(this.crudEscuelaDataSet)).BeginInit();
            ((System.ComponentModel.ISupportInitialize)(this.cargoBindingSource)).BeginInit();
            this.panel1.SuspendLayout();
            ((System.ComponentModel.ISupportInitialize)(this.pictureBox6)).BeginInit();
            ((System.ComponentModel.ISupportInitialize)(this.pictureBox5)).BeginInit();
            ((System.ComponentModel.ISupportInitialize)(this.pictureBox4)).BeginInit();
            ((System.ComponentModel.ISupportInitialize)(this.pictureBox2)).BeginInit();
            ((System.ComponentModel.ISupportInitialize)(this.pictureBox3)).BeginInit();
            ((System.ComponentModel.ISupportInitialize)(this.pictureBox1)).BeginInit();
            this.pnlCrud_Titulo.SuspendLayout();
            ((System.ComponentModel.ISupportInitialize)(this.pibCerrar)).BeginInit();
            this.SuspendLayout();
            // 
            // crudEscuelaDataSet
            // 
            this.crudEscuelaDataSet.DataSetName = "CrudEscuelaDataSet";
            this.crudEscuelaDataSet.SchemaSerializationMode = System.Data.SchemaSerializationMode.IncludeSchema;
            // 
            // cargoBindingSource
            // 
            this.cargoBindingSource.DataMember = "cargo";
            this.cargoBindingSource.DataSource = this.crudEscuelaDataSet;
            // 
            // cargoTableAdapter
            // 
            this.cargoTableAdapter.ClearBeforeFill = true;
            // 
            // panel1
            // 
            this.panel1.BackColor = System.Drawing.Color.FromArgb(((int)(((byte)(21)))), ((int)(((byte)(28)))), ((int)(((byte)(36)))));
            this.panel1.Controls.Add(this.pictureBox6);
            this.panel1.Controls.Add(this.pictureBox5);
            this.panel1.Controls.Add(this.pictureBox4);
            this.panel1.Controls.Add(this.btncerrarsesion);
            this.panel1.Controls.Add(this.pictureBox2);
            this.panel1.Controls.Add(this.pictureBox3);
            this.panel1.Controls.Add(this.lblUsuario);
            this.panel1.Controls.Add(this.pictureBox1);
            this.panel1.Controls.Add(this.btnMenu02);
            this.panel1.Controls.Add(this.btnMenu01);
            this.panel1.Location = new System.Drawing.Point(0, 28);
            this.panel1.Name = "panel1";
            this.panel1.Size = new System.Drawing.Size(170, 475);
            this.panel1.TabIndex = 1;
            this.panel1.Paint += new System.Windows.Forms.PaintEventHandler(this.panel1_Paint);
            // 
            // pictureBox6
            // 
            this.pictureBox6.BackgroundImage = global::escuela.Properties.Resources.cerrar_sesion__1_;
            this.pictureBox6.Location = new System.Drawing.Point(127, 437);
            this.pictureBox6.Name = "pictureBox6";
            this.pictureBox6.Size = new System.Drawing.Size(24, 24);
            this.pictureBox6.TabIndex = 11;
            this.pictureBox6.TabStop = false;
            // 
            // pictureBox5
            // 
            this.pictureBox5.BackColor = System.Drawing.Color.FromArgb(((int)(((byte)(67)))), ((int)(((byte)(152)))), ((int)(((byte)(249)))));
            this.pictureBox5.Location = new System.Drawing.Point(0, 278);
            this.pictureBox5.Name = "pictureBox5";
            this.pictureBox5.Size = new System.Drawing.Size(2, 49);
            this.pictureBox5.TabIndex = 10;
            this.pictureBox5.TabStop = false;
            // 
            // pictureBox4
            // 
            this.pictureBox4.BackColor = System.Drawing.Color.FromArgb(((int)(((byte)(67)))), ((int)(((byte)(152)))), ((int)(((byte)(249)))));
            this.pictureBox4.Location = new System.Drawing.Point(0, 201);
            this.pictureBox4.Name = "pictureBox4";
            this.pictureBox4.Size = new System.Drawing.Size(2, 49);
            this.pictureBox4.TabIndex = 9;
            this.pictureBox4.TabStop = false;
            // 
            // btncerrarsesion
            // 
            this.btncerrarsesion.Cursor = System.Windows.Forms.Cursors.Hand;
            this.btncerrarsesion.FlatAppearance.BorderSize = 0;
            this.btncerrarsesion.FlatStyle = System.Windows.Forms.FlatStyle.Flat;
            this.btncerrarsesion.Font = new System.Drawing.Font("Microsoft Sans Serif", 9F, System.Drawing.FontStyle.Bold, System.Drawing.GraphicsUnit.Point, ((byte)(0)));
            this.btncerrarsesion.ForeColor = System.Drawing.Color.White;
            this.btncerrarsesion.Location = new System.Drawing.Point(0, 426);
            this.btncerrarsesion.Margin = new System.Windows.Forms.Padding(2);
            this.btncerrarsesion.Name = "btncerrarsesion";
            this.btncerrarsesion.Size = new System.Drawing.Size(168, 49);
            this.btncerrarsesion.TabIndex = 8;
            this.btncerrarsesion.Tag = "1";
            this.btncerrarsesion.Text = "Cerrar Sesion de cuenta";
            this.btncerrarsesion.TextAlign = System.Drawing.ContentAlignment.MiddleLeft;
            this.btncerrarsesion.UseVisualStyleBackColor = true;
            this.btncerrarsesion.Click += new System.EventHandler(this.btncerrarsesion_Click);
            // 
            // pictureBox2
            // 
            this.pictureBox2.BackgroundImage = ((System.Drawing.Image)(resources.GetObject("pictureBox2.BackgroundImage")));
            this.pictureBox2.Location = new System.Drawing.Point(127, 213);
            this.pictureBox2.Name = "pictureBox2";
            this.pictureBox2.Size = new System.Drawing.Size(24, 24);
            this.pictureBox2.TabIndex = 7;
            this.pictureBox2.TabStop = false;
            // 
            // pictureBox3
            // 
            this.pictureBox3.BackgroundImage = ((System.Drawing.Image)(resources.GetObject("pictureBox3.BackgroundImage")));
            this.pictureBox3.Location = new System.Drawing.Point(127, 290);
            this.pictureBox3.Name = "pictureBox3";
            this.pictureBox3.Size = new System.Drawing.Size(24, 24);
            this.pictureBox3.TabIndex = 6;
            this.pictureBox3.TabStop = false;
            // 
            // lblUsuario
            // 
            this.lblUsuario.Cursor = System.Windows.Forms.Cursors.Default;
            this.lblUsuario.FlatAppearance.BorderSize = 0;
            this.lblUsuario.FlatStyle = System.Windows.Forms.FlatStyle.Flat;
            this.lblUsuario.Font = new System.Drawing.Font("Microsoft Sans Serif", 12F, System.Drawing.FontStyle.Bold, System.Drawing.GraphicsUnit.Point, ((byte)(0)));
            this.lblUsuario.ForeColor = System.Drawing.Color.FromArgb(((int)(((byte)(67)))), ((int)(((byte)(152)))), ((int)(((byte)(249)))));
            this.lblUsuario.Location = new System.Drawing.Point(0, 96);
            this.lblUsuario.Margin = new System.Windows.Forms.Padding(2);
            this.lblUsuario.Name = "lblUsuario";
            this.lblUsuario.Size = new System.Drawing.Size(168, 81);
            this.lblUsuario.TabIndex = 4;
            this.lblUsuario.Tag = "1";
            this.lblUsuario.TextAlign = System.Drawing.ContentAlignment.MiddleLeft;
            this.lblUsuario.UseVisualStyleBackColor = false;
            this.lblUsuario.Click += new System.EventHandler(this.lblUsuario_Click);
            // 
            // pictureBox1
            // 
            this.pictureBox1.Image = global::escuela.Properties.Resources.cryptospace__1_;
            this.pictureBox1.Location = new System.Drawing.Point(40, 10);
            this.pictureBox1.Name = "pictureBox1";
            this.pictureBox1.Size = new System.Drawing.Size(99, 81);
            this.pictureBox1.TabIndex = 2;
            this.pictureBox1.TabStop = false;
            // 
            // btnMenu02
            // 
            this.btnMenu02.Cursor = System.Windows.Forms.Cursors.Hand;
            this.btnMenu02.FlatAppearance.BorderSize = 0;
            this.btnMenu02.FlatStyle = System.Windows.Forms.FlatStyle.Flat;
            this.btnMenu02.Font = new System.Drawing.Font("Microsoft Sans Serif", 9.75F, System.Drawing.FontStyle.Bold, System.Drawing.GraphicsUnit.Point, ((byte)(0)));
            this.btnMenu02.ForeColor = System.Drawing.Color.White;
            this.btnMenu02.Location = new System.Drawing.Point(0, 278);
            this.btnMenu02.Margin = new System.Windows.Forms.Padding(2);
            this.btnMenu02.Name = "btnMenu02";
            this.btnMenu02.Size = new System.Drawing.Size(168, 49);
            this.btnMenu02.TabIndex = 2;
            this.btnMenu02.Tag = "1";
            this.btnMenu02.Text = "Registro de Profesores";
            this.btnMenu02.TextAlign = System.Drawing.ContentAlignment.MiddleLeft;
            this.btnMenu02.UseVisualStyleBackColor = true;
            this.btnMenu02.Click += new System.EventHandler(this.btnMenu02_Click);
            this.btnMenu02.MouseEnter += new System.EventHandler(this.btnSubMenu_Enter);
            // 
            // btnMenu01
            // 
            this.btnMenu01.Cursor = System.Windows.Forms.Cursors.Hand;
            this.btnMenu01.FlatAppearance.BorderSize = 0;
            this.btnMenu01.FlatStyle = System.Windows.Forms.FlatStyle.Flat;
            this.btnMenu01.Font = new System.Drawing.Font("Microsoft Sans Serif", 9.75F, System.Drawing.FontStyle.Bold, System.Drawing.GraphicsUnit.Point, ((byte)(0)));
            this.btnMenu01.ForeColor = System.Drawing.Color.White;
            this.btnMenu01.Location = new System.Drawing.Point(0, 201);
            this.btnMenu01.Margin = new System.Windows.Forms.Padding(2);
            this.btnMenu01.Name = "btnMenu01";
            this.btnMenu01.Size = new System.Drawing.Size(168, 49);
            this.btnMenu01.TabIndex = 1;
            this.btnMenu01.Tag = "1";
            this.btnMenu01.Text = "Registo de Alumnosㅤㅤ";
            this.btnMenu01.TextAlign = System.Drawing.ContentAlignment.MiddleLeft;
            this.btnMenu01.UseVisualStyleBackColor = true;
            this.btnMenu01.Click += new System.EventHandler(this.btnMenu01_Click);
            // 
            // tmContraerMenu
            // 
            this.tmContraerMenu.Interval = 15;
            // 
            // tmExpandirMenu
            // 
            this.tmExpandirMenu.Interval = 15;
            // 
            // panelContenedorForm
            // 
            this.panelContenedorForm.Location = new System.Drawing.Point(171, 28);
            this.panelContenedorForm.Name = "panelContenedorForm";
            this.panelContenedorForm.Size = new System.Drawing.Size(721, 472);
            this.panelContenedorForm.TabIndex = 2;
            // 
            // pnlCrud_Titulo
            // 
            this.pnlCrud_Titulo.BackgroundImage = global::escuela.Properties.Resources.sky;
            this.pnlCrud_Titulo.Controls.Add(this.panel2);
            this.pnlCrud_Titulo.Controls.Add(this.pibCerrar);
            this.pnlCrud_Titulo.Cursor = System.Windows.Forms.Cursors.SizeAll;
            this.pnlCrud_Titulo.Location = new System.Drawing.Point(0, 0);
            this.pnlCrud_Titulo.Name = "pnlCrud_Titulo";
            this.pnlCrud_Titulo.Size = new System.Drawing.Size(1062, 29);
            this.pnlCrud_Titulo.TabIndex = 0;
            this.pnlCrud_Titulo.Paint += new System.Windows.Forms.PaintEventHandler(this.pnlCrud_Titulo_Paint);
            this.pnlCrud_Titulo.MouseDown += new System.Windows.Forms.MouseEventHandler(this.PanelBarraTitulo_MouseDown);
            // 
            // panel2
            // 
            this.panel2.Location = new System.Drawing.Point(171, 28);
            this.panel2.Name = "panel2";
            this.panel2.Size = new System.Drawing.Size(888, 472);
            this.panel2.TabIndex = 2;
            // 
            // pibCerrar
            // 
            this.pibCerrar.BackColor = System.Drawing.Color.Transparent;
            this.pibCerrar.BackgroundImage = global::escuela.Properties.Resources.x;
            this.pibCerrar.Cursor = System.Windows.Forms.Cursors.Hand;
            this.pibCerrar.Location = new System.Drawing.Point(870, 4);
            this.pibCerrar.Margin = new System.Windows.Forms.Padding(2);
            this.pibCerrar.Name = "pibCerrar";
            this.pibCerrar.Size = new System.Drawing.Size(19, 19);
            this.pibCerrar.SizeMode = System.Windows.Forms.PictureBoxSizeMode.StretchImage;
            this.pibCerrar.TabIndex = 2;
            this.pibCerrar.TabStop = false;
            this.pibCerrar.Click += new System.EventHandler(this.pibCerrar_Click);
            // 
            // CRUD
            // 
            this.AutoScaleDimensions = new System.Drawing.SizeF(6F, 13F);
            this.AutoScaleMode = System.Windows.Forms.AutoScaleMode.Font;
            this.BackColor = System.Drawing.Color.FromArgb(((int)(((byte)(38)))), ((int)(((byte)(50)))), ((int)(((byte)(62)))));
            this.ClientSize = new System.Drawing.Size(893, 501);
            this.Controls.Add(this.panelContenedorForm);
            this.Controls.Add(this.panel1);
            this.Controls.Add(this.pnlCrud_Titulo);
            this.ForeColor = System.Drawing.Color.White;
            this.FormBorderStyle = System.Windows.Forms.FormBorderStyle.None;
            this.Name = "CRUD";
            this.Text = " ";
            this.Load += new System.EventHandler(this.CRUD_Load);
            ((System.ComponentModel.ISupportInitialize)(this.crudEscuelaDataSet)).EndInit();
            ((System.ComponentModel.ISupportInitialize)(this.cargoBindingSource)).EndInit();
            this.panel1.ResumeLayout(false);
            ((System.ComponentModel.ISupportInitialize)(this.pictureBox6)).EndInit();
            ((System.ComponentModel.ISupportInitialize)(this.pictureBox5)).EndInit();
            ((System.ComponentModel.ISupportInitialize)(this.pictureBox4)).EndInit();
            ((System.ComponentModel.ISupportInitialize)(this.pictureBox2)).EndInit();
            ((System.ComponentModel.ISupportInitialize)(this.pictureBox3)).EndInit();
            ((System.ComponentModel.ISupportInitialize)(this.pictureBox1)).EndInit();
            this.pnlCrud_Titulo.ResumeLayout(false);
            ((System.ComponentModel.ISupportInitialize)(this.pibCerrar)).EndInit();
            this.ResumeLayout(false);

        }

        #endregion
        private CrudEscuelaDataSet crudEscuelaDataSet;
        private System.Windows.Forms.BindingSource cargoBindingSource;
        private CrudEscuelaDataSetTableAdapters.cargoTableAdapter cargoTableAdapter;
        private System.Windows.Forms.Panel pnlCrud_Titulo;
        private System.Windows.Forms.PictureBox pibCerrar;
        private System.Windows.Forms.Panel panel1;
        private System.Windows.Forms.PictureBox pictureBox1;
        private System.Windows.Forms.Button btnMenu02;
        private System.Windows.Forms.Button btnMenu01;
        private System.Windows.Forms.Button lblUsuario;
        private System.Windows.Forms.PictureBox pictureBox3;
        private System.Windows.Forms.Panel panel2;
        private System.Windows.Forms.PictureBox pictureBox2;
        private System.Windows.Forms.Button btncerrarsesion;
        private System.Windows.Forms.Timer tmContraerMenu;
        private System.Windows.Forms.Timer tmExpandirMenu;
        private System.Windows.Forms.Panel panelContenedorForm;
        private System.Windows.Forms.PictureBox pictureBox5;
        private System.Windows.Forms.PictureBox pictureBox6;
        private System.Windows.Forms.PictureBox pictureBox4;
    }
}