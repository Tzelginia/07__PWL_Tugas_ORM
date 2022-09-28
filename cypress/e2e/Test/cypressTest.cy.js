describe('Testing CRUD', () => {
  it('Can Read Data', () => {
    cy.visit("http://127.0.0.1:8000/mahasiswa")
  })

// Fitur Create
  it('Can Create Data', () => {
    cy.visit("http://127.0.0.1:8000/mahasiswa")
    cy.get('.float-right > .btn').click()
    cy.get('#Nim').type("2041720048")
    cy.get('#Nama').type("Tzelginia Noer Cahyani")
    cy.get('#Kelas').type("TI 3F")
    cy.get('#Jurusan').type("Teknologi Informasi")
    cy.get('#Email').type("tzelginia78@gmail.com")
    cy.get('#Alamat').type("Sidoarjo")
    cy.get('#tanggal_lahir').type("2002-07-09")
    cy.get('.btn').click()

        cy.visit("http://127.0.0.1:8000/mahasiswa")
    cy.get('.float-right > .btn').click()
    cy.get('#Nim').type("2041720126")
    cy.get('#Nama').type("Auryno Nagata Adyatma")
    cy.get('#Kelas').type("TI 3A")
    cy.get('#Jurusan').type("Teknologi Informasi")
    cy.get('#Email').type("auryno19@gmail.com")
    cy.get('#Alamat').type("Malang")
    cy.get('#tanggal_lahir').type("2000-05-19")
    cy.get('.btn').click()
  })
  //Fitur Show
    it('Can Show Data', () => {
    cy.visit("http://127.0.0.1:8000/mahasiswa")
    cy.get(':nth-child(3) > :nth-child(8) > .d-inline > .btn-info').click()
    cy.get('.btn').click()
  })    

  //Fitur Edit
  it('Can Edit Data', () => {
    cy.visit("http://127.0.0.1:8000/mahasiswa")
   cy.get(':nth-child(3) > :nth-child(8) > .d-inline > .btn-primary').click()
   cy.get('#tanggal_lahir').type("2002-07-20")
   cy.get('.btn').click()
  })
    //Fitur Delete
  it('Can Delete Data', () => {
    cy.visit("http://127.0.0.1:8000/mahasiswa")
    cy.get(':nth-child(3) > :nth-child(8) > .d-inline > .btn-danger').click()
  })
})