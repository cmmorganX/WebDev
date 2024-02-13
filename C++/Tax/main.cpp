#include <iostream>

// Calculating Taxes Exercise
// Sales = $95,000
// State Tax = 4%
// County Tax = 2%
// Implement C++ to calculate the taxes and print results
// Include the total tax rate in results

using namespace std;

int main() {
    double sales = 95000;
    std::cout << "Sales: $" << sales << endl;
    
    // avoid magic numbers - someone else might not know what ".04" means
    // declare separate variables to define the numbers and clear up confusion
    double stateTaxRate = .04; 
    double stateTax = sales * stateTaxRate; // reference the variable here - instead of the number
    std::cout << "State Tax: $" << stateTax << endl;

    // to prevent numbers from being accidently changed/overwritten -- use const
    const double countyTaxRate = .02;
    double countyTax = sales * countyTaxRate;
    std::cout << "County Tax: $" << countyTax << endl;

    double totalTax = stateTax + countyTax;
    std::cout << "Total Tax: $" << totalTax;

    return 0;
}