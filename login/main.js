$("#form-signup").validate({
  rules: {
    name: {
      required: true,
    },
    phone: {
      required: true,
      minlength: 8,
    },
    password: {
      required: true,
      minlength: 6,
    },
    confirm_password: {
      required: true,
      minlength: 6,
      equalTo: "#inputPassword",
    },
    email: {
      required: true,
      email: true,
    },
  },
  messages: {
    name: {
      required: "Vui lòng nhập họ và tên",
    },
    phone: {
      required: "Vui lòng nhập số điện thoại",
      minlength: "Số máy quý khách vừa nhập là số không có thực",
    },
    password: {
      required: "Vui lòng nhập mật khẩu",
      minlength: "Vui lòng nhập ít nhất 6 kí tự",
    },
    confirm_password: {
      required: "Vui lòng nhập lại mật khẩu",
      minlength: "Vui lòng nhập ít nhất 6 kí tự",
      equalTo: "Mật khẩu không trùng",
    },
    email: {
      required: "Vui lòng nhập email",
      minlength: "Email không hợp lệ",
      email: "Vui lòng nhập email",
    },
  },
});
$("#form-signin").validate({
  rules: {
    password: {
      required: true,
      minlength: 6,
    },
    email: {
      required: true,
      email: true,
    },
  },
  messages: {
    password: {
      required: "Vui lòng nhập mật khẩu",
      minlength: "Vui lòng nhập ít nhất 6 kí tự",
    },
    email: {
      required: "Vui lòng nhập email",
      minlength: "Email không hợp lệ",
      email: "Vui lòng nhập email",
    },
  },
});
