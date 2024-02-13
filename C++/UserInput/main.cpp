#include <iostream>
using namespace std;  // allows us to use cout and cin shorthand

// Understanding Data Flow
//  >>  =  inserting something
//  >>  =  extracting something

// cin = "console input"
// numbers with decimal points are floating and require "double" instead of "int"


//int main() {
    //cout << "Enter a Value: ";
    //double value;  // declares the variable -- " integer called value"
    //cin >> value;  // read the value and put it in a variable -- "grabs the value and puts it here"
    //cout << value;
    //return 0;
//}

//use chains for simpler - cleaner code

int main() {
    cout << "Enter Values for X and Y: ";
    double x;
    double y;
    cin >> x >> y;
    cout << x + y;

    return 0;
}