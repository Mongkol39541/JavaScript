document.getElementById("citizenId").addEventListener("input", function (event) {
    const input = event.target;
    const che = input.value.replace(/-/g, '');
    const value = input.value.replace(/\D/g, '');
    const regex = /^[0-9]+$/;
    if (!regex.test(che + "0")) {
        alert("กรุณากรอกเฉพาะตัวเลขเท่านั้น");
        input.value = '';
    }
    if (value.length >= 2 && value.length <= 5) {
        const formattedValue = value.replace(/(\d{1,1})/, '$1-');
        input.value = formattedValue;
    } else if (value.length >= 6 && value.length <= 10) {
        const formattedValue = value.replace(/(\d{1,1})(\d{4,4})/, '$1-$2-');
        input.value = formattedValue;
    } else if (value.length >= 11 && value.length <= 12) {
        const formattedValue = value.replace(/(\d{1,1})(\d{4,4})(\d{5,5})/, '$1-$2-$3-');
        input.value = formattedValue;
    } else if (value.length == 13) {
        const formattedValue = value.replace(/(\d{1,1})(\d{4,4})(\d{5,5})(\d{2,2})/, '$1-$2-$3-$4-');
        input.value = formattedValue;
    }
});

document.getElementById("firstName").addEventListener("input", function (event) {
    const input = event.target;
    const value = input.value;
    const regex_1 = /^[a-zA-Z]+$/;
    const regex_2 = /^[ก-๙เ]+$/;
    if (!regex_1.test(value + "A") && !regex_2.test(value + "ก")) {
        alert("กรุณากรอกเฉพาะตัวอักษรเท่านั้น");
        input.value = '';
    }
});

document.getElementById("lastName").addEventListener("input", function (event) {
    const input = event.target;
    const value = input.value;
    const regex_1 = /^[a-zA-Z]+$/;
    const regex_2 = /^[ก-๙เ]+$/;
    if (!regex_1.test(value + "A") && !regex_2.test(value + "ก")) {
        alert("กรุณากรอกเฉพาะตัวอักษรเท่านั้น");
        input.value = '';
    }
});

document.getElementById("subdistrict").addEventListener("input", function (event) {
    const input = event.target;
    const value = input.value;
    const regex_1 = /^[a-zA-Z]+$/;
    const regex_2 = /^[ก-๙เ]+$/;
    if (!regex_1.test(value + "A") && !regex_2.test(value + "ก")) {
        alert("กรุณากรอกเฉพาะตัวอักษรเท่านั้น");
        input.value = '';
    }
});

document.getElementById("district").addEventListener("input", function (event) {
    const input = event.target;
    const value = input.value;
    const regex_1 = /^[a-zA-Z]+$/;
    const regex_2 = /^[ก-๙เ]+$/;
    if (!regex_1.test(value + "A") && !regex_2.test(value + "ก")) {
        alert("กรุณากรอกเฉพาะตัวอักษรเท่านั้น");
        input.value = '';
    }
});

document.getElementById("zipcode").addEventListener("input", function (event) {
    const input = event.target;
    const value = input.value;
    const regex = /^[0-9]+$/;
    if (!regex.test(value + "0")) {
        alert("กรุณากรอกเฉพาะตัวเลขเท่านั้น");
        input.value = '';
    }
});

document.getElementById("idForm").addEventListener("submit", function (event) {
    event.preventDefault();
    const citizenIdInput = document.getElementById("citizenId");
    const citizenId = citizenIdInput.value.replace(/-/g, '');
    const titleIdInput = document.getElementById("title");
    const title = titleIdInput.value;
    const firstNameIdInput = document.getElementById("firstName");
    const firstName = firstNameIdInput.value;
    const lastNameIdInput = document.getElementById("lastName");
    const lastName = lastNameIdInput.value;
    const addressIdInput = document.getElementById("address");
    const address = addressIdInput.value;
    const subdistrictIdInput = document.getElementById("subdistrict");
    const subdistrict = subdistrictIdInput.value;
    const districtIdInput = document.getElementById("district");
    const district = districtIdInput.value;
    const provincIdInput = document.getElementById("provinc");
    const provinc = provincIdInput.value;
    const zipcodeIdInput = document.getElementById("zipcode");
    const zipcode = zipcodeIdInput.value;
    if (validateCitizenId(citizenId) == false) {
        alert("เลขบัตรประชาชนไม่ถูกต้อง กรุณากรอกใหม่");
        citizenIdInput.classList.add('is-invalid');
        return false;
    } else {
        citizenIdInput.classList.remove('is-invalid');
    }
    if (title == 'คำนำหน้าชื่อ') {
        alert("กรุณาเลือกคำนำหน้าชื่อ");
        titleIdInput.classList.add('is-invalid');
        return false;
    } else {
        titleIdInput.classList.remove('is-invalid');
    }
    if (firstName.length < 2 || firstName.length > 20) {
        alert("ชื่อไม่ถูกต้อง กรุณากรอกใหม่");
        firstNameIdInput.classList.add('is-invalid');
        return false;
    } else {
        firstNameIdInput.classList.remove('is-invalid');
    }
    if (lastName.length < 2 || lastName.length > 30) {
        alert("นามสกุลไม่ถูกต้อง กรุณากรอกใหม่");
        lastNameIdInput.classList.add('is-invalid');
        return false;
    } else {
        lastNameIdInput.classList.remove('is-invalid');
    }
    if (address.length < 15) {
        alert("ที่อยู่ไม่ถูกต้อง กรุณากรอกใหม่");
        addressIdInput.classList.add('is-invalid');
        return false;
    } else {
        addressIdInput.classList.remove('is-invalid');
    }
    if (subdistrict.length < 2) {
        alert("ตำบล/แขวงไม่ถูกต้อง กรุณากรอกใหม่");
        subdistrictIdInput.classList.add('is-invalid');
        return false;
    } else {
        subdistrictIdInput.classList.remove('is-invalid');
    }
    if (district.length < 2) {
        alert("อำเภอ/เขตไม่ถูกต้อง กรุณากรอกใหม่");
        districtIdInput.classList.add('is-invalid');
        return false;
    } else {
        districtIdInput.classList.remove('is-invalid');
    }
    if (provinc == '') {
        alert("กรุณาเลือกจังหวัด");
        provincIdInput.classList.add('is-invalid');
        return false;
    } else {
        provincIdInput.classList.remove('is-invalid');
    }
    if (zipcode.length != 5) {
        alert("รหัสไปรษณีย์ไม่ถูกต้อง กรุณากรอกใหม่");
        zipcodeIdInput.classList.add('is-invalid');
        return false;
    } else {
        zipcodeIdInput.classList.remove('is-invalid');
    }
    const outputcitizenId = document.getElementById("outputcitizenId");
    outputcitizenId.innerHTML = citizenId;
    const outputfullName = document.getElementById("outputfullName");
    outputfullName.innerHTML = title + firstName + " " + lastName;
    const outputaddress = document.getElementById("outputaddress");
    outputaddress.innerHTML = address;
    const outputsubdistrict = document.getElementById("outputsubdistrict");
    outputsubdistrict.innerHTML = subdistrict;
    const outputdistrict = document.getElementById("outputdistrict");
    outputdistrict.innerHTML = district;
    const outputprovinc = document.getElementById("outputprovinc");
    outputprovinc.innerHTML = provinc;
    const outputzipcode = document.getElementById("outputzipcode");
    outputzipcode.innerHTML = zipcode;
});

function validateCitizenId(citizenId) {
    if (!/^\d{13}$/.test(citizenId)) {
        return false;
    }
    const digits = citizenId.split('').map(Number);
    const checkDigit = digits.pop();
    const sum = digits.reduce((acc, digit, index) => acc + digit * (13 - index), 0);
    const expectedCheckDigit = (11 - (sum % 11)) % 10;
    return Number(checkDigit) === expectedCheckDigit;
};