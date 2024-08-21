describe("Opinion Gathering App", () => {
    it("allows users to log in and submit opinions", () => {
        cy.visit("/login.php");
        cy.get('input[name="login"]').type("admin");
        cy.get('input[name="password"]').type("password");
        cy.get('input[type="submit"]').click();

        cy.url().should("include", "/admin.php");
        cy.contains("Zalogowany").should("be.visible");

        cy.visit("/ocena.php");
        cy.get('input[name="ocena"][value="4"]').check();
        cy.get('textarea[name="uwagi"]').type("Great experience!");
        cy.get('input[name="imie_nazwisko"]').type("Test User");
        cy.get('button[type="submit"]').click();

        cy.url().should("include", "/ocena.php"); // Assuming thank you message is on the same page
        cy.contains("Dziękuję za opinię").should("be.visible");
        cy.contains("Ocena: 4").should("be.visible");
        cy.contains("Uwagi: Great experience!").should("be.visible");
        cy.contains("Imię i nazwisko / Nick: Test User").should("be.visible");
    });
});
