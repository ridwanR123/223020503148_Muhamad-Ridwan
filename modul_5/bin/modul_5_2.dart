void main() {
  List<Map<String, dynamic>> listWithMap = [
    {'key1': 'value1', 'key2': 2},
    {'name': 'Ridwan', 'age': 99999}
  ];

  print('List dengan map:');
  listWithMap.forEach((map) {
    print('$map');
  });
}