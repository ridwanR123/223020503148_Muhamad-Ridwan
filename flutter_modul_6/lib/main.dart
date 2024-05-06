import 'package:flutter/material.dart';

import './praktikum_III/bagian_a.dart';
import './praktikum_III/bagian_b/container_satu.dart';
import './praktikum_III/bagian_b/container_dua.dart';

import './praktikum_IV/list_view.dart';
import './praktikum_IV/image_column.dart';

void main(List<String> args) {
  runApp(MyApp());
}

class MyApp extends StatelessWidget {
  const MyApp({super.key});

  @override
  Widget build(BuildContext context) {
    return MaterialApp(
      debugShowCheckedModeBanner: false,

      // - - - - - ( PRAKTIKUM III ) - - - - -

      // - - - - - ( PRAKTIKUM IV ) - - - - -
      home: list_view(),
      //  home: image_column(),
    );
  }
}
